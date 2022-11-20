<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function viewCommunity(){
        return view('community.community-page');
    }
    public function createCommunity(){
        return view('community.create-community');
    }
    public function postCreateCommunity(){
        return view('community.create-community');
    }
    public function editCommunity(){
        return view('community.create-community');
    }
    public function postEditCommunity(){
        return view('community.create-community');
    }
    
}
