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

    public function soltemInstallation()
    {
        return $this->hasManyThrough(
        \App\Models\SoltemInstallation::class, // model tujuan
        \App\Models\SoltemRequest::class,      // model perantara
        'soltem_id',       // foreign key di SoltemRequest
        'soltem_request_id', // foreign key di SoltemInstallation
        'id',              // local key di Soltem
        'id'               // local key di SoltemRequest
    );
    }
}
