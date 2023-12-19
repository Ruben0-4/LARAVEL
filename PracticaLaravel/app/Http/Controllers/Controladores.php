<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Controladores extends Controller
{
    public function getJugadores(){
        $jugadores = ['Ter Stegen' , 'Araujo' , 'Gavi' , 'Raphiña'];

        return response()->json(['mensaje' => 'Estos son algunos jugadores del FC Barcelona', 'datos' => $jugadores]);
    }
}
