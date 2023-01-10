<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Storage;

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

    public function imgSave() {
        try {
            if ( isset( $_POST[ 'image' ] ) ) {
                $data = $_POST[ 'image' ];
                $image_array_1 = explode( ';', $data );
                $image_array_2 = explode( ',', $image_array_1[ 1 ] );
                $data = base64_decode( $image_array_2[ 1 ] );
                $imageName = time() . '.png';
                \File::put(storage_path('\profile\profile'). $imageName, $data);
                //$im->move( $path, $imageName );
                echo '<img src="' .url('/') .'/storage/profile/profile'.$imageName.'" class="img-thumbnail" />';
            }
        } catch ( \Throwable $th ) {
            //throw $th;
            echo $th;
        }
    }

}
