<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class AdminStatisticsController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin');
    }
    public function main(){
        $total_males = sizeof(Data::where('gender', 'male')->get());
        $total_females = sizeof(Data::where('gender', 'female')->get());

        $total_eleven = sizeof(Data::where('admission_level', 11)->get());
        $total_twelve = sizeof(Data::where('admission_level', 12)->get());
        return view('admin.statistics.main', compact('total_males', 'total_females', 'total_eleven', 'total_twelve'));
    }
    public function genderDensity(){
        $total_males_eleven = sizeof(Data::where(['gender'=> 'male', 'admission_level'=> 11])->get());
        $total_females_eleven = sizeof(Data::where(['gender'=> 'female', 'admission_level' => 11])->get());

        $total_males_twelve = sizeof(Data::where(['gender'=> 'male', 'admission_level'=> 12])->get());
        $total_females_twelve = sizeof(Data::where(['gender'=> 'female', 'admission_level' => 12])->get());
        return view('admin.statistics.gender_density', compact('total_males_eleven', 'total_females_eleven', 'total_males_twelve', 'total_females_twelve'));
    }
}
