<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title      = "Dashboard";
        $getDatas   = [];
        
        return View('admin.index',compact('title'));
    }
}
