<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class TimelineController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::latest();

        return view('users.timelines.index', compact('reports'));
    }
}
