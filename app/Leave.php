<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'leave_type',
        'date_from',
        'date_to',
        'days',
        'reason'
    ];

    protected $dates = ['date_from'];

    public function users()
    {
        return $this->belongsTo('App\User', 'employee_id');
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved',true);
    }
}
