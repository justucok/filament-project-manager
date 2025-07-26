<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoltemRequestItem extends Model
{
    //

    public function soltem()
    {
        return $this->belongsTo(Soltem::class);
    }

    public function request()
    {
        return $this->belongsTo(SoltemRequest::class);
    }
}
