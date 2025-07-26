<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soltem extends Model
{
    //

    public function requestItems()
    {
        return $this->hasMany(SoltemRequestItem::class);
    }
}
