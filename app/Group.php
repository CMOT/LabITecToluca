<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    
    protected $fillable = ['title', 'subject', 'quantity', 'id_instructor'];
    
}
