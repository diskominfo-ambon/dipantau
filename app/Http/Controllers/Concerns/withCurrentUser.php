<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

trait WithCurrentUser
{
    protected $currentUser;

    public function __construct()
    {
        $this->currentUser = Auth::user();
    }
}
