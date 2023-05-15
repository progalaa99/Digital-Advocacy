<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnalysis;
use App\Models\User;
class AnalysisController extends Controller
{
    public function region(){
        $regions = UserAnalysis::pluck('region');
        return view('advocacy.reports',['regions'=>$regions]);
    }

    public function age(){
        $regions = UserAnalysis::pluck('age');
        return view('advocacy.reports',['regions'=>$regions]);
    }


    public function gender(){ 
        $regions = UserAnalysis::pluck('gender');
        return view('advocacy.reports',['regions'=>$regions]);
    }
    
}
