<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Park;
use App\Models\User;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function parks()
    {
        return $this->morphToMany(Park::class, 'parkable');
    }

    public function users()
    {
        return $this->morphToMany(User::class, 'userable');
    }
}
