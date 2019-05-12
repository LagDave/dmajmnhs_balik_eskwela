<?php

namespace App\Http\Controllers;

use App\Data;
use App\Guardian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function guardiansDensity(){
        $total_distinct_fathers = sizeof(DB::select("SELECT DISTINCT father_name FROM guardians WHERE father_name != ''"));
        $total_distinct_mothers = sizeof(DB::select("SELECT DISTINCT mother_name FROM guardians WHERE mother_name != ''"));
        $total_distinct_guardians = sizeof(DB::select("SELECT DISTINCT guardian_name FROM guardians WHERE guardian_name != ''"));

        $grade_eleven_total_distinct_fathers = sizeof(DB::select("SELECT DISTINCT father_name FROM guardians WHERE father_name != '' && data_admission_level = 11"));
        $grade_eleven_total_distinct_mothers = sizeof(DB::select("SELECT DISTINCT mother_name FROM guardians WHERE mother_name != '' && data_admission_level = 11"));
        $grade_eleven_total_distinct_guardians = sizeof(DB::select("SELECT DISTINCT guardian_name FROM guardians WHERE guardian_name != '' && data_admission_level = 11"));

        $grade_twelve_total_distinct_fathers = sizeof(DB::select("SELECT DISTINCT father_name FROM guardians WHERE father_name != '' && data_admission_level = 12"));
        $grade_twelve_total_distinct_mothers = sizeof(DB::select("SELECT DISTINCT mother_name FROM guardians WHERE mother_name != '' && data_admission_level = 12"));
        $grade_twelve_total_distinct_guardians = sizeof(DB::select("SELECT DISTINCT guardian_name FROM guardians WHERE guardian_name != '' && data_admission_level = 12"));

        return view('admin.statistics.guardians_density', compact(
            'total_distinct_fathers',
            'total_distinct_mothers',
            'total_distinct_guardians',
            'grade_eleven_total_distinct_fathers',
            'grade_eleven_total_distinct_mothers',
            'grade_eleven_total_distinct_guardians',
            'grade_twelve_total_distinct_fathers',
            'grade_twelve_total_distinct_mothers',
            'grade_twelve_total_distinct_guardians'
        ));
    }
}
