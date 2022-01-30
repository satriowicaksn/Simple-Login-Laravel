<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(Request $request){
        $role = $request->session()->get('role');
        if(!$request->session()->has('role') || $role != 'staff'){
            return redirect('login');
        };
        return view('staffDashboard');
    }
}
