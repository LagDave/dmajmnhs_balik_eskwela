<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $guarded = ['id', 'data_id'];
    public function data(){
        return $this->belongsTo('App\Data');
    }
    public function setFatherNameAttribute($value){
        $this->attributes['father_name'] = trim(preg_replace('/\s+/',' ', $value));
    }
    public function setMotherNameAttribute($value){
        $this->attributes['mother_name'] = trim(preg_replace('/\s+/',' ', $value));
    }
    public function setGuardianNameAttribute($value){
        $this->attributes['guardian_name'] = trim(preg_replace('/\s+/',' ', $value));
    }
}
