<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'department_id',
        'position_id',
        'date_hire',
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }
    
    public function soltemRequests()
    {
        return $this->hasMany(SoltemRequest::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
