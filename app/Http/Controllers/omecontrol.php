<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class omecontrol extends Controller
{
    public function formulario (Request $request){

        echo('FORMULARIO DAS MULAS');



        return view ('formulario');
    }




}
