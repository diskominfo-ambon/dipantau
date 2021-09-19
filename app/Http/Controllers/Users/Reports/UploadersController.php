<?php

namespace App\Http\Controllers\Users\Reports;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Exception;
use App\Models\Attachment;

class UploadersController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('file');

        try {
            $file->store('reports', ['disk' => 'public']);
            $filename = $file->getClientOriginalName();

            return response()
                ->ok(data: compact('filename'), status: 201, json: true);

        } catch (Exception $e) {
            $message = $e->getMessage();
            Log::error($message);

            return response()->error(json: true, message: $message, status: $e->getCode());
        }

    }


    public function destroy($id)
    {
        Attachment::findOrFail($id)
            ->delete();

        return response()
            ->ok(message: __('Deleted attachment :id successfully.', compact('id')));
    }
}
