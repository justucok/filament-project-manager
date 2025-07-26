<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoltemRequest extends Model
{
    //

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function items()
    {
        return $this->hasMany(SoltemRequestItem::class);
    }
}
