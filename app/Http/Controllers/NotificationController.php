<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use Auth;

class NotificationController extends Controller
{
    public function saveNewsletter()
    {
        try {
            $email_id = $_POST['email_id'];
            $newsletter = new Newsletter();
            $newsletter->email = $email_id;
            $newsletter->user_id = Auth::user()->user_id;
            $newsletter->save();
            echo "newsletter saved ";
        }  catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
    }
}
