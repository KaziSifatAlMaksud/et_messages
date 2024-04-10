<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInfo extends Model
{
    use HasFactory;
    protected $table = 'profile_info';
    protected $fillable = ['user_id', 'image', 'address', 'phone', 'gender', 'country', 'bio', 'status'];
}
