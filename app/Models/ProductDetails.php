<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductDetails extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'slug',
        'description',
        'status',
    ];

    /**
     * Relationship with Product.
     */
    public static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        // Check for existing slug and append a number if needed
        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
