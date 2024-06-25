<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'jobTitle',
        'youtubeLink',
        'scriptLink',
        'verifiedStat',
        'uploadDate'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function u()
    {
        return $this->belongsTo(User::class);
    }
}
