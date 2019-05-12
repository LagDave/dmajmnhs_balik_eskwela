<?php

namespace App\Http\Controllers;

use App\AdminKey;
use App\Data;
use App\Exports\AllDataExport;
use App\Exports\ElevenDataExport;
use App\Exports\ElevenFemalesExport;
use App\Exports\ElevenMalesExport;
use App\Exports\FemalesDataExport;
use App\Exports\GasElevenExport;
use App\Exports\GasTwelveExport;
use App\Exports\MalesDataExport;
use App\Exports\TvlElevenExport;
use App\Exports\TvlTwelveExport;
use App\Exports\TwelveDataExport;
use App\Exports\TwelveFemalesExport;
use App\Exports\TwelveMalesExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin')->except(['index', 'validateLogin']);
    }

    public function index(){
        return view('admin.index');
    }
    public function validateLogin(Request $request){
        $request->validate([
            'access_key'=>'required'
        ]);

        $access_key = 'dmajmnhs0530';
        $typed_access_key = $request->access_key;

        if($typed_access_key === $access_key){
            $request->session()->put('is_admin', true);
            return redirect(route('admin.dashboard'));
        }else{
            return redirect(route('admin.index'))->with('failed', 'Access Denied.');
        }

    }

//    Dashboard Pills
    public function dashboard(){
        return redirect(route('admin.dashboard.all'));
    }
    public function all(){
        $data = Data::orderBy('id', 'desc')->paginate(25);
        return view('admin.pills.all', compact('data'));
    }
    public function males(){
        $data = Data::where('gender', 'Male')->orderBy('id', 'desc')->paginate(25);
        return view('admin.pills.males', compact('data'));
    }
    public function females(){
        $data = Data::where('gender', 'Female')->orderBy('id', 'desc')->paginate(25);
        return view('admin.pills.females', compact('data'));
    }
    public function eleven(){
        $data = Data::where('admission_level', 11)->orderBy('id', 'desc')->paginate(25);
        return view('admin.pills.eleven', compact('data'));
    }
    public function twelve(){
        $data = Data::where('admission_level', 12)->orderBy('id', 'desc')->paginate(25);
        return view('admin.pills.twelve', compact('data'));
    }
    public function search(Request $request){
        $key = addslashes(strtolower($request->all()['key']));
        $data = DB::select("SELECT * FROM data WHERE full_name LIKE '%$key%'");
        return view('admin.pills.search', compact('data', 'key'));
    }







    public function downloadAll(){
        return Excel::download(new AllDataExport(), 'all_data.xlsx');
    }
    public function downloadMales(){
        return Excel::download(new MalesDataExport(), 'males_data.xlsx');
    }
    public function downloadFemales(){
        return Excel::download(new FemalesDataExport(), 'females_data.xlsx');
    }
    public function downloadEleven(){
        return Excel::download(new ElevenDataExport(),'grade_eleven_data.xlsx');
    }
    public function downloadTwelve(){
        return Excel::download(new TwelveDataExport(), 'grade_twelve_data.xlsx');
    }
    public function downloadElevenMales(){
        return Excel::download(new ElevenMalesExport(), 'grade_eleven_males.xlsx');
    }
    public function downloadElevenFemales(){
        return Excel::download(new ElevenFemalesExport(), 'grade_eleven_females.xlsx');
    }
    public function downloadTwelveMales(){
        return Excel::download(new TwelveMalesExport(), 'grade_twelve_males.xlsx');
    }
    public function downloadTwelveFemales(){
        return Excel::download(new TwelveFemalesExport(), 'grade_twelve_females.xlsx');
    }

    public function downloadGasEleven(){
        return Excel::download(new GasElevenExport(), 'gas_grade_eleven.xlsx');
    }
    public function downloadGasTwelve(){
        return Excel::download(new GasTwelveExport(), 'gas_grade_twelve.xlsx');
    }
    public function downloadTvlEleven(){
        return Excel::download(new TvlElevenExport(), 'tvl_grade_eleven.xlsx');
    }
    public function downloadTvlTwelve(){
        return Excel::download(new TvlTwelveExport(), 'tvl_grade_twelve.xlsx');
    }

}
