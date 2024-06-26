<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SVController extends Controller
{
    function thongTinSv(){
        $user = [
           
                'id'=> 'PH32085',
                'name' => 'Do Tuan Anh',
                'class' => 'WD18321'
           
            ];
        return view('viewSV')->with([
            'user' => $user
        ]);
    }
}
