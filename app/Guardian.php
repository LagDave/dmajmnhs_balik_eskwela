<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $guarded = ['id', 'data_id'];
    public function data(){
        return $this->belongsTo('App\Data');
    }
}
