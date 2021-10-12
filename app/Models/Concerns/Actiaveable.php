<?php

namespace App\Models\Concerns;

trait Activeable
{
    public function getIsActiveAttribute(): bool
    {
        return $this->is_active;
    }
}
