<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Park;
use App\Models\Breed;

class UserController extends Controller
{
    public function associate(Request $request, string $userId)
    {
        $user = User::find($userId);
        $type = $request->input('type');

        if($type == 'park') {
            $park = Park::find($request->input('id'));
            $user->parks()->save($park);
            $park->users()->save($user);
            return response()->json(['message' => 'Park associated successfully', 200]);
        } else if ($type == 'breed') {
            $breed = Breed::find($request->input('id'));
            $user->breeds()->save($breed);
            $breed->users()->save($user);
            return response()->json(['message' => 'Breed associated successfully', 200]);
        }

        return response()->json(['message' => 'Invalid type', 400]);
    }
}
