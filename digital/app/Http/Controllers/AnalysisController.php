<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function region(){
        $showregion = User::get();
    }
    
}
