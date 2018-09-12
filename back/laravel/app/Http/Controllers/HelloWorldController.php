<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => ['name'=>'cool']]);
    }
}