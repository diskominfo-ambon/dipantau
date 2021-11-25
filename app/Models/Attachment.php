<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_filename',
        'filename',
        'content_type',
        'byte_size',
        'path'
    ];

    public function delete()
    {
        if (Storage::disk('public')->exists($this->path)) {
            Storage::disk('public')
                ->delete($this->path);
        }

        return parent::delete();
    }
}
