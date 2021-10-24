<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Report;
use App\Models\MarkerPoint;
use App\Models\User;


class TimelineController extends Controller
{
    public function index(Request $request)
    {
        $users = User::withoutCurrentUser()->get();
        $marker_points = MarkerPoint::all();
        $reports = Report::latest()
            ->findByQueryEquals($request, ['marker_id', 'user_id'])
            ->limit(10)
            ->get();

        return view('users.timelines.index', compact('reports', 'users', 'marker_points'));
    }
}
