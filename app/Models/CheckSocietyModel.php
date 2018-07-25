<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckSocietyModel extends Model
{
    //
    protected $table = "societydetails";
 
    //only allow the following items to be mass-assigned to our model
    protected $fillable = array('user_id', 's_id', 's_name','s_email', 's_address','s_account_no','pan_card','c_tel_no');

    protected $foreignKey="user_id";
}
