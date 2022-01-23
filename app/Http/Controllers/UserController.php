<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Roles;

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
}
