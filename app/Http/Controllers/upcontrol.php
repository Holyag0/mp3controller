<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upcontrol extends Controller
{
    public function uploads(){



        return view('uploads');


    }

    public function upcheck(Request $foto){

        var_dump($_FILES);
        return view ('upcheck');
    }
}
