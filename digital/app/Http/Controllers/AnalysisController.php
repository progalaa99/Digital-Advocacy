<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnalysis;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AnalysisController extends Controller
{
    public function analysis(){
        $regions = UserAnalysis::pluck('region');

        $ageCounts = DB::table('users')
                        ->select('age', DB::raw('count(*) as count'))
                        ->groupBy('age')
                        ->orderByDesc('count')
                        ->limit(2)
                        ->get();

        $genderCounts = DB::table('users')
                        ->select('gender', DB::raw('count(*) as count'))
                        ->groupBy('gender')
                        ->orderByDesc('count')
                        ->limit(1)
                        ->get();

        return view('advocacy.reports',['regions'=>$regions,'ageCounts'=>$ageCounts,'genderCounts'=>$genderCounts]);


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
        
        $genderCounts = DB::table('users')
                            ->select('gender', DB::raw('count(*) as count'))
                            ->groupBy('gender')
                            ->orderByDesc('count')
                            ->limit(1)
                            ->get();
        return view('advocacy.reports',['genderCounts'=>$genderCounts]);
    }
    
}
