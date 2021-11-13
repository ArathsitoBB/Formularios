<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampeonController extends Controller
{
        function LOL(){
        return view('formCampeon');
    }
    function capturarGhoul(Request $request){
        $LOL = $request->input('LOL');
        $DificultadCampeon = $request->input('Dificultad Campeon');
        $TipoGhoul =  floatval($ghoul) * floatval($claseghoul);
    return view('capturarCampeon',['TipoGhoul' => $TipoGhoul]);
    }