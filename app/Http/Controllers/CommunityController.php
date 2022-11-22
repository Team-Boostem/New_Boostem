<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function viewCommunity(){
        return view('pages.community.community-page');
    }
    public function createCommunity(){
        return view('pages.community.create-community');
    }
    public function postCreateCommunity(){
        return 'hii';
        return view('pages.community.community-page');
    }
    public function editCommunity(){
        return view('pages.community.create-community');
    }
    public function postEditCommunity(){
        return view('pages.community.create-community');
    }
    
}
