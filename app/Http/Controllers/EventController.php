<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller {
    public function event( $event_slug ) {
        //get event whwere slug = $event_slug
        $event = Event::where( 'slug', $event_slug )->first();
        $que = json_decode( $event->questions, true );
        //dd( $que );
        return view( 'pages/event/view-event', compact( 'event','que' ) );
    }

    public function eventCreate() {
        return view( 'pages/event/create-event' );
    }

    public function eventCreatePost( Request $request, $community_id ) {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
        ] );
        dd( $request->all() );
        $customArr = [];
        $j = $request->hidden;

        for ( $i = 0; $i <= $j; $i++ ) {
            $customArr[ $i ] = [
                'title' => $request->custom_input[ $i ][ 'title' ],
            ];
        }

        //radio public button into 01
        $radio = $request->post( 'type' );
        $yourval = ( isset( $radio ) ) ? 1 : 0;

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->meta_title = $request->meta_title;
        $event->meta_description = $request->meta_description;
        $event->category = $request->category;
        $event->tags = $request->tags;
        $event->image = $request->image;
        $event->slug = $request->slug;
        $event->type = $yourval;
        // $event->start_date = $request->start_date;
        // $event->end_date = $request->end_date;
        // $event->location = $request->location;
        // $event->vanue_type = $request->vanue_type;
        $event->community_id = $community_id;
        $event->creator = Auth::user()->user_id;
        $event->questions = json_encode( $customArr );

        $event->save();
        return redirect()->route( 'blog' );
    }
}
