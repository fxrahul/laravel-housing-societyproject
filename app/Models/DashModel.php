<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashModel extends Model
{
    //
    protected $table = "memberdetails";
 
    //only allow the following items to be mass-assigned to our model
    protected $fillable = array('soc_id','m_maint_no', 'm_name', 'm_email', 'm_password','m_wing','m_flat_no','m_address','m_pan_card','m_cel_no','m_parking_charge','m_gas_charge','m_water_charge','m_light_charge');

    protected $foreignKey="soc_id";
}
