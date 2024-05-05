<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\Category;

class ProjectController extends Controller
{
    public function index($id){
        
        $project = Portfolio::where('title', [$id])->first();
        $setting = Setting::first();
        $portfolios= Portfolio::where('cat_id', $project->cat_id)->take(6)->get();
        return view('project', compact('project','setting','portfolios'));
    }
}
