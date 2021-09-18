<?php

namespace App\Models\Users;

use App\Models\Report;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait Reportable
{
    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function scopeFindReportOfWeeks(Builder $builder): Builder
    {
        return $builder;
    }
}
