<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function home(Request $request)
    {

        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return view('index');


    }
}
