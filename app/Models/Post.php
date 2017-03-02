<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';
    public $fillable = ['title', 'subtitle', 'image', 'description', 'text'];
}
