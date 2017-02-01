<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $table = 'practices';
    
    protected $fillable =['title','description','url', 'status'];
    
}
