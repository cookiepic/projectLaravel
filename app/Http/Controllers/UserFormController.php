<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        $req -> validate([
            'firstname' => 'required | min:2 | max:15',
            'lastname' => 'required | min:2 | max:30',
            'email' => 'required | min:5 | max:15',
        ]);
        // return $req -> input();
        $user = [
            'firstName' => $req->input('firstname'),
            'lastName' => $req->input('lastname'),
            'email' => $req->input('email'),
        ];
        return view('user', ['user'=>$user]);
    }
}
