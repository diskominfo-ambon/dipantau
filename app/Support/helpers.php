<?php

use DateTimeInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Stringable;


if (!function_exists('str')) {
    function str($s): Stringable {
        return Str::of($s);
    }
}


if (!function_exists('carbon')) {
    function carbon(string|DateTimeInterface|null $datetime): self {
        if (is_null($datetime) || str($datetime)->isEmpty()) return Carbon::now();

        return Carbon::parse($datetime);
    }
}
