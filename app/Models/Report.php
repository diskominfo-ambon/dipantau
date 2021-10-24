<?php

namespace App\Models;

use Illuminate\Support\Str;
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


    public function scopeFindQueryByEquals(Builder $builder, array $fields): Builder
    {
        return $builder
            ->where(function (Builder $builder) use ($fields) {
                foreach ($fields as $key => $value) {
                    Str::of($value)->trim()->isNotEmpty()
                        && $builder->where($key, 'like', "%{$value}%");
                }
            });
    }
}
