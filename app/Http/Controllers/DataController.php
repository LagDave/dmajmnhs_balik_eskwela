<?php

namespace App\Http\Controllers;

use App\Data;
use App\Guardian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataController extends Controller
{

    public function __construct(){
        $this->middleware('isMachineValid')->except(['invalidMachine', 'setupPage', 'setupValidate']);
    }

//    This will show the form
    public function index(){
        return view('users.form');
    }

    // Machine Validation
    public function invalidMachine(){
        return view('users.invalid_machine');
    }
    public function setupPage(){
        return view('users.setup_machine');
    }
    public function setupValidate(Request $request){
        $typed_registration_key = $request->all()['secret_registration_key'];
        $secret_registration_key = 'dmajmachine0530';

        if($typed_registration_key == $secret_registration_key){
            Cookie::queue(Cookie::make('valid_machine', 'true', 7200));
            return redirect(route('data.index'));
        }else{
            return redirect(route('data.setupPage'))->with('failed', 'Invalid Registration Key');
        }
    }

    public function invalidateMachine(){
        Cookie::queue(Cookie::forget('valid_machine'));
        return redirect(route('data.setupPage'));
    }

//    This will validate and store the form
    public function store(Request $request){
        $request->validate([
            "admission_level"=> 'required',
            'track'=>'required',
            "previous_school"=> 'required',
            "lrn"=> 'required',
            "first_name"=> 'required',
            "last_name"=> 'required',
            "gender"=> 'required',
            "citizenship"=> 'required',
            "birthplace"=> 'required',
            "religion"=> 'required',
            "birth_month"=>'required',
            'birth_day'=>'required',
            'birth_year'=>'required',
            'social_assistance'=>'required',
            "barangay"=> 'required',
            "province"=> 'required',
            "city"=> 'required',
            "cellphone_number"=> 'required'
        ]);

        $data = $request->all();
        $fullname = strtolower($request->all()['first_name'].' '.$request->all()['middle_name'].' '.$request->all()['last_name'].' '.$request->all()['suffix']);
        $data['full_name'] = $fullname;

        $guardian_data = new Guardian();
        $guardian_data->father_name = strtolower($data['father_first_name']).' '.strtolower($data['father_last_name']);
        $guardian_data->mother_name = strtolower($data['mother_first_name']).' '.strtolower($data['mother_last_name']);
        $guardian_data->guardian_name = strtolower($data['guardian_first_name']).' '.strtolower($data['guardian_last_name']);
        $guardian_data->data_admission_level = $data['admission_level'];


        if($student = Data::create($data)){
            $student->guardian()->save($guardian_data);
            return redirect(route('data.success'));
        }else{
            return 'An error ocurred. Please get in touch with Rustine Dave via rdavephp@gmail.com or 09102733707. Thank you.';
        }
    }


    public function success(){
        return view('users.success');   
    }
}
