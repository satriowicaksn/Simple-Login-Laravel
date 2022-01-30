<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = new Users();
        $user->name = "Satrio Putro Wicaksono";
        $user->phone = "+6281334304990";
        $user->email = "satriowicaksono076@gmail.com";
        $user->password = "MY_SECRET_PASSWORD";   
        $user->role = new Roles(1, 'Admin', 'Administrator Website');
        
        $data = [
            "name" => $user->name,
            "phone" => $user->phone,
            "email" => $user->email,
            "role" => $user->role->name
        ];

        return view('user', $data);
    }

    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $redirect = 'staff';
        if($username == "manager@gmail.com"){
            $data = $this->getManagerAccount();
            $redirect = 'manager';
        } else if($username == "staff@gmail.com"){
            $data = $this->getStaffAccount();   
            $redirect = 'staff';
        } else {
            return redirect('login');   
        }
        if($data['password'] == $password){
            $request->session()->put('id', $data['id']);
            $request->session()->put('username', $data['username']);
            $request->session()->put('name', $data['name']);
            $request->session()->put('role', $data['role']);
            return redirect($redirect);
        }   
        return redirect('login');
    }

    public function getManagerAccount(){
        $user = new Users();
        $user->name = "Satrio Putro Wicaksono";
        $user->email = "manager@gmail.com";
        $user->password = "manager123";   
        $user->role = new Roles(1, 'manager', 'Manager Operasional');
        
        $data = [
            "id" => 1,
            "name" => $user->name,
            "username" => $user->email,
            "password" => $user->password,
            "role" => $user->role->name
        ];
        return $data;
    }

    public function getStaffAccount(){
        $user = new Users();
        $user->name = "Krishna Hendra Wijaya";
        $user->email = "staff@gmail.com";
        $user->password = "staff123";   
        $user->role = new Roles(1, 'staff', 'Staff IT');
        
        $data = [
            "id" => 2,
            "name" => $user->name,
            "username" => $user->email,
            "password" => $user->password,
            "role" => $user->role->name
        ];
        return $data;
    }

    public function logout(Request $request){
        $request->session()->forget(['id', 'username', 'name', 'password', 'role']);
        return redirect('login');   
    }
}
