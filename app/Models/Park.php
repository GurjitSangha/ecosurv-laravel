<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Breed;
use App\Models\User;

class Park extends Model
{
    use HasFactory;

    public function breeds()
    {
        return $this->morphToMany(Breed::class, 'breedable');
    }

    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }
}
