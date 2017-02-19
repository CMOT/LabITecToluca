<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    
    protected $fillable = ['title', 'description', 'id_group'];
    
}
