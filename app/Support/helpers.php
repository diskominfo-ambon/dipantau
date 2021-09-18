<?php

use Illuminate\Support\Str;
use \Illuminate\Support\Stringable;

function str($s): Stringable {
    return Str::of($s);
}
