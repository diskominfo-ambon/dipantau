<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReportGraphRequest;
use Illuminate\Http\JsonResponse;
use App\Models\Report;

class ReportGraphController extends Controller
{
    public function create(string $slug)
    {
        $report = Report::findBySlug($slug)->firstOrFail();

        return view('users.reports.graph-form', compact('report'));
    }


    public function store(ReportGraphRequest $request, string $slug): JsonResponse
    {
        $body = $request->validationData();

        $report = Report::findBySlug($slug)->firstOrFail();
        $report->graphs()->create($body);

        return new JsonResponse(
            [
                'message' => 'Created successfully',
                'code' => 201,
                'status' => true
            ],
            200
        );
    }

    public function update(ReportGraphRequest $request, string $slug, int $id): JsonResponse
    {
        $body = $request->validationData();

        $report = Report::findBySlug($slug)->firstOrFail();
        $report->graphs()->findOrFail($id)
            ->update($body);

        return new JsonResponse(
            [
                'message' => 'Successfully',
                'code' => 200,
                'status' => true
            ],
            200
        );
    }
}
