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

        static::creating(function ($request) {
            $lastNumber = static::max('id') ?? 0;
            $request->installation_number = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }


    protected $fillable = [
        'installation_number',
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

    public function soltem()
    {
        return $this->belongsTo(Soltem::class, 'soltem_request_id', 'soltem_id');
    }
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
