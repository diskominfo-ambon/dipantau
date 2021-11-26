<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReportGraphRequest;
use Illuminate\Http\JsonResponse;

class ReportGraphController extends Controller
{
    public function create()
    {
        return view('users.reports.graph-form');
    }


    public function store(ReportGraphRequest $request, string $slug)
    {
        $body = $request->validationData();
    }


    public function update(ReportGraphRequest $request, string $slug)
    {
        abort_if(!$request->ajax(), 401);


    }
}
