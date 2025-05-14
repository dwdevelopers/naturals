<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    //
    protected $fillable = ['name'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
