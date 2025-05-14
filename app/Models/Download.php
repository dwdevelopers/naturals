<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'name',
        'path',
        'mime_type',
        'size',
        'is_active',
        'download_categories_id',
    ];
     public function category()
    {
        return $this->belongsTo(DownloadCategory::class, 'download_categories_id');
    }
}
