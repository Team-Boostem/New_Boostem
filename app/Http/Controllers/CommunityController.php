<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    public function viewCommunity(){
        return view('pages.community.community-page');
    }
    public function createCommunity(){
        return view('pages.community.create-community');
    }
    public function postCreateCommunity(Request $request){
        //dd($request->all());
        $request->validate( [
            'name'=>'required',
            'username'=>'required|unique:communities,username',
            'email'=>'required|email|unique:communities,email',
            'description'=>'required',
        ] );
        //convert linkedin facebook and twitter to json
        $socials = array(
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
        );

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
    public function editCommunity(){
        return view('pages.community.create-community');
    }
    public function postEditCommunity(){
        return view('pages.community.create-community');
    }
    
}
