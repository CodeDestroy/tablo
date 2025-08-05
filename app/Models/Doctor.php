<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Doctor extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'secondName',
        'name',
        'thirdName',
        'post'
    ];

    public function getFullNameAttribute()
    {
        return "{$this->secondName} {$this->name} {$this->thirdName}";
    }
}
