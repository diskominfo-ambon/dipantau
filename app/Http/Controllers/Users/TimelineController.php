<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Database\Eloquent\Builder;

class TimelineController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::latest()
            ->where(function (Builder $builder) use ($request) {
                //  kunci nama yang digunakan untuk pencarian query.
                $searchable = [
                    'marker_id',
                    'user_id'
                ];

                foreach ($searchable as $key) {
                    if ($request->filled($key)) {
                        $builder->where($key, 'like', "%{
                            $request->get($key)
                        }%");
                    }
                }
            })
            ->limit(10)
            ->get();

        return view('users.timelines.index', compact('reports'));
    }
}
