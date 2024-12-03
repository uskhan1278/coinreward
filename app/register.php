<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class register extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'registers';

    protected $fillable = ['name', 'email','username', 'password'];


	public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}