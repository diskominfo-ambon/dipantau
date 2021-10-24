<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Concerns\Activeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'is_active' => 'boolean'
    ];


    public function scopeFindByQueryEquals(Builder $builder, Request $request, array $keys): Builder
    {

        return $builder->where(function (Builder $builder) use ($request, $keys) {
            foreach($keys as $key) {
                if ($request->filled($key)) $builder->where($key, 'like', "%{$request->get($key)}%");
            }

        });
    }
}
