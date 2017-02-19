<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Resource extends Model
{
    protected $table = 'resources';
    
    protected $fillable = ['title', 'description', 'type', 'url', 'status'];
    
    public function setUrlAttribute($url) {
        $this->attributes['url'] =  Carbon::now()->second.$url->getClientOriginalName();
        $name =Carbon::now()->second.$url->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($url));
    }
}
