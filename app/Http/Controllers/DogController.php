<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DogController extends Controller
{
    public function getAllBreeds()
    {
        $response = Http::dogceo()->get('/breeds/list/all');
        return $response->json();
    }

    public function getBreed(string $id)
    {
        return response()->json(['breed' => $id], 200);
    }

    public function getRandomBreed()
    {
        $response = Http::dogceo()->get('/breeds/list/all');
        $breeds = $response->json();
        return response()->json(['breed' => array_rand($breeds['message'])], 200);
    }

    public function getImageByBreed(string $id)
    {
        $response = Http::dogceo()->get('/breed/' . $id . '/images/random');
        return $response->json();
    }
}
