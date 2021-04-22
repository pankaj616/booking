<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table   = 'addresses';

    protected $fillable = [
        "employee_id", "zip", "address_line_1",
        "address_line_2", "city", "state", "country"
    ];
}
