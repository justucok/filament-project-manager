<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'department',
        'date_hire',
    ];


    public function requests()
    {
        return $this->hasMany(SoltemRequest::class);
    }
}
