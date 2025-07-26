<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoltemRequest extends Model
{
    protected $fillable = [
        'employee_id',
        'ticket_number',
        'client_name',
        'soltem_id',
        'status',
        'request_date',
        'notes',
    ];

    public function approve()
    {
        if ($this->status !== 'approved') {
            $this->update(['status' => 'approved']);

            // Update status Soltem
            if ($this->soltem && $this->soltem->status === 'ready') {
                $this->soltem->update(['status' => 'out']);
            }
        }
    }

    public function return()
    {
        if ($this->status !== 'returned') {
            $this->update(['status' => 'returned']);

            // Update status Soltem
            if ($this->soltem && $this->soltem->status === 'out') {
                $this->soltem->update(['status' => 'ready']);
            }
        }
    }
    public function reject()
    {
        if ($this->status !== 'rejected') {
            $this->update(['status' => 'rejected']);
        }
    }


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function soltem()
    {
        return $this->belongsTo(Soltem::class);
    }
}
