<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        echo view('list-user');
    }

    function getUser($id,$name = null){
        echo 'id = '.$id.'<br>';
        echo 'name = '.$name;
    }

    function updateUser(Request $req){
        echo $req -> id;
    }
}
