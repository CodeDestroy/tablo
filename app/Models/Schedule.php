<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'doctor_id',
        'date',
        'start_time',
        'end_time'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
