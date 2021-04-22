<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeLeave extends Model
{
    protected $table = "employe_leaves";
    protected $fillable = [
        'employee_id','date_of_leave', 'status',
        'reason', 'reject_reason'
    ];

    public function employee(){
        return $this->hasOne('\App\User','id','employee_id');
    }
}
