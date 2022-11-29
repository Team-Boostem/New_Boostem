<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\Community;

class editAccess {
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure( \Illuminate\Http\Request ): ( \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse )  $next
    * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    */

    public function handle( Request $request, Closure $next ) {

        //get the community id from the url
        $community_id = $request->route( 'community_id' );
        $community = Community::where( 'id', $community_id )->first();
        if ( $community ) {
            if ( $community->creator == Auth::user()->user_id ) {
                return $next( $request );
            } else {
                return response()->view( 'pages.error.error' );
            }
        } else {
            return redirect()->route( 'login' );
        }

    }
}
