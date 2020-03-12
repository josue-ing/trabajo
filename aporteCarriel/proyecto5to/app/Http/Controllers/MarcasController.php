<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        $marcas=Marca::get();


        return view('sistema.marcas', compact('marcas'));


    }
}
