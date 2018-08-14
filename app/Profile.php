<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Profile extends Model
{
    protected $fillable = [
        'dob',
    ];

    protected $appends = [
        'age',
    ];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['dob'])->age;
    }


    public function user()
    {
        return $this->hasOne('App\User');
    }

}
