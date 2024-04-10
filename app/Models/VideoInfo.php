<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoInfo extends Model
{
    use HasFactory;

    protected $table = 'videoinfo';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'tag',
        'category',
        'question',
        'video_file_name',
        'user_id',
        'child_id',
        'video_length',
        'date',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function child()
    {
        return $this->belongsTo(ChildUser::class, 'child_id');
    }
}
