<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'is_active' => 'boolean'
    ];

    protected $with = ['attachments', 'categories'];

    public function scopeFindQueryByEquals(Builder $builder, array $fields): Builder
    {
        return $builder
            ->where(function (Builder $builder) use ($fields) {
                foreach ($fields as $key => $value) {

                    $builder->when(
                        Str::of($value)->trim()->isNotEmpty(),
                        fn () => $builder->where($key, 'like', "%{$value}%")
                    );
                }
            });
    }

    public function attachments(): MorphToMany
    {
        return $this->morphToMany(Attachment::class, 'record');
    }

    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
