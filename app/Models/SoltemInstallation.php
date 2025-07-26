<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoltemInstallation extends Model
{
    protected $fillable = [
        'employee_id',
        'soltem_id',
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

    public function soltem()
    {
        return $this->belongsTo(Soltem::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
