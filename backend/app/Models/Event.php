<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Schedule;
use App\Model\User;

class Event extends Model
{
    use HasFactory;

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
