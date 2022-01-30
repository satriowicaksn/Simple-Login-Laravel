<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(Request $request){
        $role = $request->session()->get('role');
        if(!$request->session()->has('role') || $role != 'manager'){
            return redirect('login');
        }
        return view('managerDashboard');
    }
}
