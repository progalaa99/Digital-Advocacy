<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnalysis;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AnalysisController extends Controller
{
    public function analysis(){
        $allregions = UserAnalysis::pluck('region');
        $regions = DB::table('users')
                        ->select('region', DB::raw('count(*) as count'))
                        ->groupBy('region')
                        ->orderByDesc('count')
                        ->limit(1)
                        ->get();

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

                       
        $maleCount = DB::table('users')->where('gender', 'Male')->count();
        $femaleCount = DB::table('users')->where('gender', 'Female')->count();
        $totalCount = $maleCount + $femaleCount;
        $malePercentage = round(($maleCount / $totalCount) * 100);
        $femalePercentage =round(($femaleCount / $totalCount) * 100);
        return view('advocacy.reports',['regions'=>$regions,'ageCounts'=>$ageCounts,
                                        'genderCounts'=>$genderCounts,
                                        'malePercentage'=>$malePercentage,
                                        'femalePercentage'=>$femalePercentage,
                                        'totalCount'=>$totalCount,
                                        'allregions'=>$allregions]);


    }

   


    
    
}
