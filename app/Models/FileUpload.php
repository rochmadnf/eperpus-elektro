<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasUuids;

    protected $guarded = ['id'];

    public function uniqueIds()
    {
        return ['uuid'];
    }

    public function fileCategory()
    {
        return $this->belongsTo(FileCategory::class);
    }
}
