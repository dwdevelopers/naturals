<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = [
        'title',
        'image_path',
        'gallery_category_id',
        'is_active',
    ];
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id');
    }
}
