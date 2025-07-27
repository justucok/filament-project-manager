<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
    ];

    public function position()
    {
        return $this->hasMany(Position::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
