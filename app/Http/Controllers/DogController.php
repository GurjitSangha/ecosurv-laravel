<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Breed;
use App\Http\Controllers\BreedController;
use App\Http\Requests\StoreBreedRequest;
use Illuminate\Support\Facades\Redis;

class DogController extends Controller
{
    public function getAllBreeds()
    {
        $response = Http::dogceo()->get('/breeds/list/all');
        $json = $response->json();
        $breeds = array_keys($json['message']);
        $breedController = new BreedController();
        foreach($breeds as $breed) {
            $storeRequest = new StoreBreedRequest();
            $storeRequest->name = $breed;
            $breedController->store($storeRequest);
        }

        Redis::set('breeds', $breeds);
        return $breeds;
    }

    public function getBreed(string $id)
    {
        $breedController = new BreedController();
        $breed = new Breed();
        $breed['id'] = $id;
        $res = $breedController->show($breed);
        return response()->json(['breed' => $res->name, 'users' => $res->users, 'parks' => $res->parks], 200);
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
