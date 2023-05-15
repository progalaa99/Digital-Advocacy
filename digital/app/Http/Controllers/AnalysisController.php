<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnalysis;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AnalysisController extends Controller
{
    public function region(){
        $regions = UserAnalysis::pluck('region');
        return view('advocacy.reports',['regions'=>$regions]);
    }

    public function age(){

        $ageCounts = DB::table('users')
                        ->select('age', DB::raw('count(*) as count'))
                        ->groupBy('age')
                        ->orderByDesc('count')
                        ->limit(2)
                        ->get();
        return view('advocacy.reports',['ageCounts'=>$ageCounts]);
    }


    public function gender(){ 
        $regions = UserAnalysis::pluck('gender');
        return view('advocacy.reports',['regions'=>$regions]);
    }
    
}
