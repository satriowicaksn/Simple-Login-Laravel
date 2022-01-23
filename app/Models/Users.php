<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $id;
    public $name;
    public $phone;
    public $email;
    public $password;
    public $role;
}
