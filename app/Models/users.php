<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'name',
        'school_name',
        'gender',
        'grade',
        'number',
        'email',
        'birthday',
        'parent_name',
        'parent_name',
        'address'
    ];
}

class users extends Model{
    protected $fillable = [
        'name',
        'password'
    ];
}