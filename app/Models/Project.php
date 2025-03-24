<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'content',
        'description',
        'additional_info',
        'status',
    ];
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
    public function activities()
    {
        return $this->hasMany(ProjectActivity::class, 'project_id');
    }
}
