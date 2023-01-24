<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller

{
    public function post(){
        return view('addpost');
    }

    public function story(Request $request)
    {

        $this->validate($request,[
            'title'=>'required',
            'articles'=>'required'
        ]);
        post::create($request->all());
        return view('index');

    }

}
