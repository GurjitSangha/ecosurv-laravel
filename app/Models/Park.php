<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Breed;

class Park extends Model
{
    use HasFactory;

    public function breeds()
    {
        return $this->morphToMany(Breed::class, 'breedable');
    }
}
