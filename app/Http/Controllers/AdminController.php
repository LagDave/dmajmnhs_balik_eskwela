<?php

namespace App\Http\Controllers;

use App\AdminKey;
use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin')->only(['dashboard']);
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
        $data = Data::where('gender', 'Male')->paginate(25);
        return view('admin.pills.males', compact('data'));
    }
    public function females(){
        $data = Data::where('gender', 'Female')->paginate(25);
        return view('admin.pills.females', compact('data'));
    }
    public function eleven(){
        $data = Data::where('admission_level', 11)->paginate(25);
        return view('admin.pills.eleven', compact('data'));
    }
    public function twelve(){
        $data = Data::where('admission_level', 12)->paginate(25);
        return view('admin.pills.twelve', compact('data'));
    }
    public function search(Request $request){
        $key = addslashes(strtolower($request->all()['key']));
        $data = DB::select("SELECT * FROM data WHERE full_name LIKE '%$key%'");
        return view('admin.pills.search', compact('data', 'key'));
    }
}
