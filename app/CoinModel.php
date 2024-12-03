<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinModel extends Model
{
	//For User
    protected $table="registration";
    public $timestamps=true;
    protected $fillable=['fname','lname','password','email','username'];
}
