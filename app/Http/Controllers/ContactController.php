<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use \Auth;

class ContactController extends Controller
{
    public function complete(Request $request)
    {
        $contact = new Contact();
        $contact->user_id = Auth::user()->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->body = $request->body;
        $contact->save();

        return view('app.thankyou',[
            'contact' => $contact
        ]);
    }
}
