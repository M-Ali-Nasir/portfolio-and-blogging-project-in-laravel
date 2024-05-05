<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;


class AdminController extends Controller
{
    public function index(){

        $auth_user = Auth::user();
        $setting = Setting::first();


        return view('admin.index', compact('auth_user'));
    }
}
