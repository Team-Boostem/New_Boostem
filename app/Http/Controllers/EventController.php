<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller {
    public function event( $event_slug ) {
        //get event whwere slug = $event_slug
        $event = Event::where( 'slug', $event_slug )->first();
        $que = json_decode( $event->questions, true );
        //dd( $que );

        //current date and time
        $current_date = date( 'Y-m-d H:i:s' );
        if ( $event->start_date > $current_date ) {
            $event->status = 'upcoming';
        } elseif ( $event->start_date < $current_date && $event->end_date > $current_date ) {
            $event->status = 'ongoing';
        } elseif ( $event->end_date < $current_date ) {
            $event->status = 'completed';
        }

        return view( 'pages/event/view-event', compact( 'event', 'que' ) );

    }

    public function eventPost( $event_slug, Request $request ) {
        //dd( $request->all() );
        $event = Event::where( 'slug', $event_slug )->first();
        $que = json_decode( $event->questions, true );
        foreach ( $request->all() as $key => $value ) {
            if ( $key == '_token' ) {
                continue;
            } elseif ( $key == 'name' ) {
                $basic_answers[ $key ] = $value;
            } elseif ( $key == 'email' ) {
                $basic_answers[ $key ] = $value;
            } else {
                $answers[ $key ] = $value;
            }
        }
        //if a question is in $que but not in $request->all() then it is not answered
        foreach ( $que as $question ) {
            if ( !array_key_exists( $question[ 'name' ], $request->all() ) ) {
                $answers[ $question[ 'name' ] ] = 'not answered';
            }
        }
        //dd( $answers );

        $partisipent = new EventRegistration;
        $partisipent->event_id = $event->id;
        $partisipent->user_id = Auth::user()->id;
        $partisipent->basic_answers = $basic_answers;
        $partisipent->answers = $answers;
        $partisipent->save();

        return redirect()->route( 'event', [ 'event_slug' => $event_slug ] );
    }

    public function eventCreate() {
        return view( 'pages/event/create-event' );
    }

    public function eventCreatePost( Request $request, $community_id ) {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
        ] );

        //dd( $request->all() );
        $customArr = [];
        $j = $request->hidden;

        if ( $request->custom_input ) {

            for ( $i = 0; $i <= $j; $i++ ) {
                if ( $request->custom_input[ $i ][ 'type' ] == 'text' ) {
                    $customArr[ $i ] = [
                        'name' => 'custom_input_' . $i,
                        'type' => $request->custom_input[ $i ][ 'type' ],
                        'title' => $request->custom_input[ $i ][ 'title' ],
                        'required' => $request->custom_input[ $i ][ 'required' ]
                    ];
                } elseif ( $request->custom_input[ $i ][ 'type' ] == 'textarea' ) {
                    $customArr[ $i ] = [
                        'name' => 'custom_input_' . $i,
                        'type' => $request->custom_input[ $i ][ 'type' ],
                        'title' => $request->custom_input[ $i ][ 'title' ],
                        'required' => $request->custom_input[ $i ][ 'required' ]
                    ];
                } elseif ( $request->custom_input[ $i ][ 'type' ] == 'radio' ) {
                    $customArr[ $i ] = [
                        'name' => 'custom_input_' . $i,
                        'type' => $request->custom_input[ $i ][ 'type' ],
                        'title' => $request->custom_input[ $i ][ 'title' ],
                        'required' => $request->custom_input[ $i ][ 'required' ]
                    ];
                    foreach ( $request->custom_input[ $i ][ 'options' ] as $key => $value ) {
                        $customArr[ $i ][ 'options' ][] = $value;
                    }
                }
            }
        }
        //dd( $customArr );

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
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        // $event->location = $request->location;
        // $event->vanue_type = $request->vanue_type;
        $event->community_id = $community_id;
        $event->creator = Auth::user()->user_id;
        $event->questions = json_encode( $customArr );
        $event->save();
        return redirect()->back()->with( 'success', 'Event Created Successfully' );

    }

    public function eventTable( $event_slug ) {
        $event = Event::where( 'slug', $event_slug )->first();
        $que = json_decode( $event->questions, true );
        $participantes = EventRegistration::where( 'event_id', $event->id )->get();

        $table = [];
        foreach ( $que as $value ) {
            foreach ( $participantes as $participante ) {
                if ( $value ) {
                    if ( $participante->answers[ $value[ 'name' ] ] ) {
                        $table[ $value[ 'name' ] ][] = $participante->answers[ $value[ 'name' ] ];
                    } else {
                        $table[ $value[ 'name' ] ][] = 'null';
                    }
                }

            }
        }
        //dd( $table );
        return view( 'pages/event/event-table', compact( 'event', 'que', 'participantes','table' ) );
    }
}
