<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $guarded = [
        'id'
    ];

//    SET ATTRIBS
    public function setFirstNameAttribute($value){
        $value != null ? $this->attributes['first_name'] = ucwords(strtolower($value)) : $value;

    }
    public function setMiddleNameAttribute($value){
        $value != null ? $this->attributes['middle_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setLastNameAttribute($value){
        $value != null ? $this->attributes['last_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setSuffixAttribute($value){
        $value != null ? $this->attributes['suffix'] = ucwords(strtolower($value)) : $value;
    }
    public function setGenderAttribute($value){
        $value != null ? $this->attributes['gender'] = ucwords(strtolower($value)) : $value;
    }
    public function setStatusAttribute($value){
        $value != null ? $this->attributes['status'] = ucwords(strtolower($value)) : $value;
    }
    public function setCitizenshipAttribute($value){
        $value != null ? $this->attributes['citizenship'] = ucwords(strtolower($value)) : $value;
    }
    public function setBirthplaceAttribute($value){
        $value != null ? $this->attributes['birthplace'] = ucwords(strtolower($value)) : $value;
    }
    public function setReligionAttribute($value){
        $value != null ? $this->attributes['religion'] = ucwords(strtolower($value)) : $value;
    }

    public function setBarangayAttribute($value){
        $value != null ? $this->attributes['barangay'] = ucwords(strtolower($value)) : $value;
    }
    public function setProvinceAttribute($value){
        $value != null ? $this->attributes['province'] = ucwords(strtolower($value)) : $value;
    }
    public function setCityAttribute($value){
        $value != null ? $this->attributes['city'] = ucwords(strtolower($value)) : $value;
    }

    public function setFatherFirstNameAttribute($value){
        $value != null ? $this->attributes['father_first_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setFatherLastNameAttribute($value){
        $value != null ? $this->attributes['father_last_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setFatherOccupationAttribute($value){
        $value != null ? $this->attributes['father_occupation'] = ucwords(strtolower($value)) : $value;
    }

    public function setMotherFirstNameAttribute($value){
        $value != null ? $this->attributes['mother_first_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setMotherLastNameAttribute($value){
        $value != null ? $this->attributes['mother_last_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setMotherOccupationAttribute($value){
        $value != null ? $this->attributes['mother_occupation'] = ucwords(strtolower($value)) : $value;
    }

    public function setGuardianFirstNameAttribute($value){
        $value != null ? $this->attributes['guardian_first_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setGuardianLastNameAttribute($value){
        $value != null ? $this->attributes['guardian_last_name'] = ucwords(strtolower($value)) : $value;
    }
    public function setGuardianOccupationAttribute($value){
        $value != null ? $this->attributes['guardian_occupation'] = ucwords(strtolower($value)) : $value;
    }

}
