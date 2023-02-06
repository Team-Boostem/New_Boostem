<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamCommunityController extends Controller
{
    // view create edit TEAM in community..............

    public function viewTeamCommunity( $username ) {
        return view( 'pages.community.list-team' );
    }

    public function listTeamCommunity( $username ) {
        return view( 'pages.community.list-team' );
    }

    public function addTeamCommunity( $username ) {

    }

    public function addTeamCommunityPost( $username ) {

    }

    public function editTeamCommunity( $username, $user ) {

    }

    public function editTeamCommunityPost( $username, $user ) {

    }

    public function deleteTeamCommunityPost( $username, $user ) {

    }

}
