<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use Auth;
use App\Models\PageView;
use App\Models\TeamCommunity;
use Mail;
use App\Mail\CreatedCommunity;
use App\Models\Subscribe;

class CommunityController extends Controller {

    public function viewCommunity( $username ) {

        $community = Community::where( 'username', $username )->first();

        if ( $community ) {
            $socials = $community->socials;
            $result = compact( 'community', 'socials' );

            if ( Auth::user()->user_id == $community->creator ) {
                return view( 'pages.community.community-page', )->with( $result );
            } else {
                page('community/{username}', $community->username);
                return view( 'pages.community.community-page', )->with( $result );
            }
        } else {
            return view( 'pages.error.not-found' );
        }

    }

    public function createCommunity() {
        $url = '/community/create';
        $heading = 'Create your Community';
        $result = compact( 'heading', 'url' );
        return view( 'pages.community.create-community' )->with( $result );
    }

    public function postCreateCommunity( Request $request ) {
        //dd( $request->all() );
        $request->validate( [
            'name'=>'required',
            'username'=>'required|alpha|regex:/^\S*$/u|unique:communities,username',
            'email'=>'required|email|unique:communities,email',
            'description'=>'required',
        ] );
        //convert linkedin facebook and twitter to json
        $socials = [ 
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ];

        $model = new Community();
        $model->name = $request->post( 'name' );
        $model->username = $request->post( 'username' );
        $model->email = $request->post( 'email' );
        $model->tagline = $request->post( 'tagline' );
        $model->contact = $request->post( 'contact' );
        $model->website = $request->post( 'website' );
        $model->organisation_college = $request->post( 'organisation_college' );
        $model->description = $request->post( 'description' );
        $model->about = $request->post( 'about' );
        $model->socials = $socials;
        $model->creator = Auth::user()->user_id;
        $model->save();

        $maildata = [ 
            "name" =>Auth::user()->name,
            "email" =>Auth::user()->email,
            "community_name" =>$request->name,
            "subject" =>"Your Community " .$request->name." have successfully Created at Boostem",
         ];
        Mail::send('emails.CreatedCommunity',  $maildata, function ($message) use ( $maildata) {
            $message->from('info.boostem@gmail.com', 'Team Boostem');
            $message->to( $maildata['email'],  $maildata['name']);
            $message->subject($maildata['subject']);
        });

        $request->session()->flash( 'message', 'category Inserted Successfully' );
        return redirect( '/dashboard' );
    }

    public function editCommunity( $username ) {
        $community = Community::where( 'username', $username )->first();
        if ( !is_null( $community ) ) {
            $url = '/community/edit'.'/'.$username;
            $heading = 'Edit your community';
            $socials = $community->socials;
            $result = compact( 'community', 'heading', 'url', 'socials' );
            return view( 'pages.community.create-community' )->with( $result );
        } else {
            return view( 'pages.error' );
        }
    }

    public function postEditCommunity( $username, Request $request ) {
        $request->validate( [
            'name'=>'required',
            'username'=>'required|alpha|regex:/^\S*$/u|unique:communities,username'.$username,
            'email'=>'required|email|unique:communities,email,'.$username,
            'description'=>'required',
        ] );
        $socials = [
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        ];
        //get community from database where community_id is equal to $community_id
        $community = Community::where( 'username', $username )->first();
        //update community
        $community->name = $request->name;
        $community->username = $request->username;
        $community->email = $request->email;
        $community->tagline = $request->tagline;
        $community->contact = $request->contact;
        $community->website = $request->website;
        $community->organisation_college = $request->organisation_college;
        $community->description = $request->description;
        $community->about = $request->about;
        $community->socials = $socials;
        $community->save();
        //redirect to community page
        return redirect( '/community/view/'.$username );

    }

    // view create edit TEAM in community..............

    public function viewTeamCommunity( $community_id ) {

        $team = TeamCommunity::where( 'community_id', $community_id )->first();
        $community = Community::where( 'id', $community_id )->first();
        if($community->creator == Auth::user()->user_id){
            $access = true;
        }else{
            $access = false;
        }
        $result = compact( 'team','access' );
        return view( 'pages.community.view-team', )->with( $result );
    }

    public function createTeamCommunity( $community_id ) {

        $team = TeamCommunity::where( 'community_id', $community_id )->first();
        $result = compact( 'team' );
        return view( 'pages.community.create-team', )->with( $result );
    }
    public function createTeamCommunityPost( $community_id, Request $request ) {

        $team = TeamCommunity::where( 'community_id', $community_id )->first();
        $request->validate([
            'team_details.*.title' => 'required',
            'team_details.*.email' => 'required'
        ]);
        if($team){
            $team->community_id = $community_id;
            $team->team_details = $request->team_details;
            $team->save();
            return view( 'pages.community.community-page', );
        } else{
            $team = new TeamCommunity();
            $team->community_id = $community_id;
            $team->team_details = $request->team_details;
            $team->save();
            return view( 'pages.community.community-page', );
        }

        
    }
    public function editTeamCommunity( $username ) {

        $team = TeamCommunity::where( 'username', $username )->first();
        return view( 'pages.community.community-page', )->with( $result );
    }
    public function editTeamCommunityPost( $username ) {

        $community = TeamCommunity::where( 'username', $username )->first();
        return view( 'pages.community.community-page', )->with( $result );
    }
    public function subscribe( $username ) {
        $community = Community::where( 'username', $username )->first();
        $subscribe = new Subscribe();
        $subscribe->community_id = $community->id;
        $subscribe->user_id = Auth::user()->user_id;
        $subscribe->save();
        return redirect( '/community'.'/'.$username );
    }
    

}
