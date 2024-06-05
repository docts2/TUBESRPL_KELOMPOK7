<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'company',
        'location',
    ];

    /**
     * The users that saved the job.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'saved_jobs')->withTimestamps();
    }
}
