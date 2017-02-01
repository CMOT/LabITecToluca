<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $table = 'resources';
    
    protected $fillable = ['title', 'description', 'type', 'url', 'status'];
}
