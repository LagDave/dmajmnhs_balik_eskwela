<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
//    This will show the form
    public function index(){
        return view('users.form');
    }

//    This will validate and store the form
    public function store(Request $request){
        $data = $request->validate([
            "admission_level"=> 'required',
            "previous_school"=> 'required',
            "lrn"=> 'required',
            "first_name"=> 'required',
            "last_name"=> 'required',
            "gender"=> 'required',
            "status"=> 'required',
            "citizenship"=> 'required',
            "birthplace"=> 'required',
            "religion"=> 'required',
            "birthdate"=> 'required',
            "barangay"=> 'required',
            "province"=> 'required',
            "city"=> 'required',
            "cellphone_number"=> 'required'
        ]);

        $data = $request->all();
        $fullname = strtolower($request->all()['first_name'].' '.$request->all()['middle_name'].' '.$request->all()['last_name'].' '.$request->all()['suffix']);
        $data['full_name'] = $fullname;
        if(Data::create($data)){
            return view('users.success');
        }

    }
}
