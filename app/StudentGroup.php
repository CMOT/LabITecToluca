<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    protected $table = 'student_groups';
    
    protected $fillable= ['id_student', 'id_group'];
}
