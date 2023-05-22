<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Park;
use App\Models\Breed;

class ParkController extends Controller
{
    public function breed(Request $request, string $parkId)
    {
        $park = Park::find($parkId);
        $breed = Breed::find($request->input('id'));
        $park->breeds()->save($breed);
        return response()->json(['message' => 'Breed associated successfully', 200]);
    }
}
