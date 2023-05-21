<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function allBreeds()
  {
    return response()->json(['hello' => 'world'], 200);
  }
}
