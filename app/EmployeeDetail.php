<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    protected $table = 'employee_detail'; 
    protected $fillable = ['name','email','department','city'];
}
