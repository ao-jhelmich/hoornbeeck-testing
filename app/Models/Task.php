<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    // use HasFactory; @FEEDBACK - This is not needed since there is no factory for this model

    protected $fillable = [
        'name',
        'project_id',
        'days',
        'hours',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Project::class);
    }
}
