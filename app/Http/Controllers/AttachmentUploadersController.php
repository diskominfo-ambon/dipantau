<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Attachment;

class AttachmentUploadersController extends Controller
{
    public function store(Request $request): string|int
    {
        $request->validate([
            'files' => 'required|array|min:1',
            'files.*' => 'required|file|mimes:pdf|mimetypes:application/pdf|size:2000'
        ]);

        $file = $request->file('files')[0];
        $path = $file->store('reports', ['disk' => 'public']);
        $body = [
            'original_filename' => $file->getClientOriginalName(),
            'filename' => Str::of($path)->split('/\//')->last(),
            'path' => $path,
            'content_type' => $file->getMimeType(),
            'byte_size' => $file->getSize()
        ];

        $attachment = Attachment::create($body);

        return $attachment->id;
    }

    public function destroy(int $id): JsonResponse
    {
        $attachment = Attachment::findOrFail($id);
        $attachment->delete();

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
