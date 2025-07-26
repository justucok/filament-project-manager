<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soltem extends Model
{
    protected $fillable = [
        'name',
        'cpe_type',
        'cpe_registration',
        'modem_type',
        'modem_registration',
        'gsm_number',
        'data_quota',
        'quota_expiry_date',
        'sim_expiry_date',
        'status',
        'notes',
    ];

    public function soltemRequest()
    {
        return $this->hasMany(SoltemRequest::class);
    }
}
