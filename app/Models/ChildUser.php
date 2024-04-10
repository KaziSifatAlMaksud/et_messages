<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildUser extends Model
{
    use HasFactory;

    protected $table = 'child_users';

    protected $fillable = ['user_id', 'name', 'email', 'password', 'status', 'reminder_date', 'send_status', 'cover_photo', 'profile'];
}
