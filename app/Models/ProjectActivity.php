<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectActivity extends Model
{
    protected $fillable = [
        'project_id',
        'activity_name',
        'slug',
        'description',
        'status',
    ];

    /**
     * Relationship with Project.
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public $timestamps = true;
}
