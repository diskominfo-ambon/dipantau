<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory;


    public function reports(): MorphToMany
    {
        return $this->morphToMany(Report::class, 'categorizable');
    }
}
