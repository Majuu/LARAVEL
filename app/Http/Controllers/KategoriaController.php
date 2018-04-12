<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoria;

class KategoriaController extends Controller
{
    public function getKategorias(){
      $kategorias = Kategoria::all();

      return view('kategorias')->with('kategorias', $kategorias);


    }
}
