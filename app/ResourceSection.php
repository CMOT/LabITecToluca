<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;

class ResourceSection extends Model
{
    protected $table = 'resource_sections';
    
    protected $fillable = ['id_section', 'id_resource'];
}
