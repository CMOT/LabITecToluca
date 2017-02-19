<?php

namespace labtectoluca;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Practice extends Model
{
    protected $table = 'practices';
    
    protected $fillable =['title','description','url', 'status', 'id_user'];
    
    public function setUrlAttribute($url) {
        $this->attributes['url'] =  Carbon::now()->second.$url->getClientOriginalName();
        $name =Carbon::now()->second.$url->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($url));
    }
}
