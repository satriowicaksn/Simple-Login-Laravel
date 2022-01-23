<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $id;
    public $name;
    public $description;
    function __construct($id, $name, $description)
    {   
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}
