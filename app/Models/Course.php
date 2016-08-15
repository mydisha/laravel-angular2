<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['author', 'name', 'description', 'price'];
    protected $guarded = ['id'];
}
