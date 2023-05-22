<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use App\Models\Breed;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Breed::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        $breed = new Breed;
        $breed->name = $request->name;
        $breed->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        return Breed::find($breed->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $breed = Breed::find($breed->id);
        $breed->name = $request->name;
        $breed->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        $breed = Breed::find($breed->id);
        $breed->destroy();
    }
}
