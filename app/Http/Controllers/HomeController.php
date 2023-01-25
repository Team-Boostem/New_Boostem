<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use DB;
use Mail;
use App\Mail\Signup;
use Auth;

class HomeController extends Controller {
    //index function

    public function index() {
        return view( 'pages/leanding' );
    }

    public function contactus() {
        return view( 'pages/contactus' );
    }

    public function contactusPost( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ] );
        $model = new Contact();
        $model->name = $request->post( 'name' );
        $model->email = $request->post( 'email' );
        $model->contact = $request->post( 'contact' );
        $model->subject = $request->post( 'subject' );
        $model->message = $request->post( 'message' );
        $model->save();

        $request->session()->flash( 'message', 'We got your message & our support team will reach you soon' );
        return redirect( 'dashboard' );
    }

}
