<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller {
    public function viewCommunity() {
        return view( 'pages.community.community-page' );
    }

    public function createCommunity() {
        $url= '/community/create';
        $heading = 'Create your Community';
        $result = compact( 'heading','url' );
        return view( 'pages.community.create-community' )->with( $result );
    }

    public function postCreateCommunity( Request $request ) {
        //dd( $request->all() );
        $request->validate( [
            'name'=>'required',
            'username'=>'required|unique:communities,username',
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
        $model->save();

        $request->session()->flash( 'message', 'category Inserted Successfully' );
        return redirect( '/dashboard' );
    }

    public function editCommunity( $community_id ) {

        $model = Community::where( 'id', $community_id )->first();
        if ( !is_null( $model ) ) {
            $url = '/community/edit'.'/'.$community_id;
            $heading = 'Edit your community';
            $socials = $model->socials;
            // $linkedin = isset($socials['linkedin']) ? $socials['linkedin'] : '';
            // $facebook = isset($socials['facebook']) ? $socials['facebook'] : '';
            // $instagram = isset($socials['instagram']) ? $socials['instagram'] : '';
            // $twitter = isset($socials['twitter']) ? $socials['twitter'] : '';
            //convert socials to array
            // $result = compact( 'model','heading','url','linkedin','facebook','instagram','twitter' );
            $result = compact( 'model','heading','url','socials' );
            return view( 'pages.community.create-community' )->with( $result );
        } else {
            return redirect( 'admin/category' );
        }

    }

    public function postEditCommunity( $community_id, Request $request ) {
        $socials = array(
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        );
        //get community from database where community_id is equal to $community_id
        $community = Community::where( 'id', $community_id )->first();
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
        $community->socials = $request->socials;
        $community->save();
        //redirect to community page
        return redirect( '/community/view/'.$community_id );

    }



}
