<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegisterUsers extends Authenticatable
{
    use Notifiable;
    //
    //
    protected $table = "societyusers";
 
    //only allow the following items to be mass-assigned to our model
    protected $fillable = array('firstname', 'lastname', 'email', 'mobilenumber','password','remember_token');

    protected $primaryKey="id";
}
