<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'status', 'id_course'];
}
