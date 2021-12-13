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


    protected static function boot()
    {
        self::creating(function (Report $report) {
            $report->slug = Str::of($report->title)->slug() .''. Str::random(10);
        });
    }

    public function scopeFindBySlug(Builder $builder, string $slug): Builder
    {
        return $builder
            ->when(
                Str::of($slug)->trim()->isNotEmpty(),
                fn (Builder $builder) => $builder->whereSlug($slug)
            );

    }

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
