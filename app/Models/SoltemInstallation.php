<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoltemInstallation extends Model
{
    protected static function booted()
    {
        static::created(function ($installation) {
            $installation->soltemRequest->soltem->update(['status' => 'used']);
        });
    }


    protected $fillable = [
        'employee_id',
        'soltem_request_id',
        'installation_date',
        'ticket_project',
        'client_name',
        'installation_address',
        'case_number',
        'category',
        'access',
        'pic_name',
        'pic_contact',
        'complaint',
        'notes',
    ];

    public function soltemRequest()
    {
        return $this->belongsTo(SoltemRequest::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
