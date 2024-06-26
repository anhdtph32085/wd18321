<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        $users = [
            [
                'id'=> 1,
                'name' => 'dta'
            ],
            [
                'id'=> 2,
                'name' => 'dta2'
            ]
            ];
        return view('list-user')->with([
            'users' => $users
        ]);
    }

    function getUser($id,$name = null){
        echo 'id = '.$id.'<br>';
        echo 'name = '.$name;
    }

    function updateUser(Request $req){
        echo $req -> id;
    }

   
}
