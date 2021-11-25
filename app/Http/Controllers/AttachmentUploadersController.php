<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Attachment;

class AttachmentUploadersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'attachment' => 'required|file|mimes:pdf'
        ]);

        $file = $request->file('attachment');
        $path = $file->storeAs('reports', ['disk' => 'public']);
        $body = [
            'original_filename' => $file->getClientOriginalName(),
            'filename' => Str::of($path)->split('/\//')->last(),
            'path' => $path,
            'content_type' => $file->getMimeType(),
            'byte_size' => $file->getMimeType()
        ];

        $attachment = Attachment::create($body);

        return new JsonResponse(
            [
                'message' => 'Successfully',
                'data' => compact('attachment'),
                'status' => true,
                'code' => 201
            ],
            201,
            json: true
        );

    }

    public function destroy(int $id)
    {
        $attachment = Attachment::findOrFail($id);

        if (Storage::exists($attachment->path)) {
            Storage::delete($attachment->path);
        }

        $attachment->delete();

        return new JsonResponse(
            [
                'message' => 'Successfully',
                'code' => 200,
                'status' => true
            ],
            200,
            json: true
        );
    }
}
