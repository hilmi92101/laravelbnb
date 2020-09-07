<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    public function bookings()
    {
    	return $this->hasMany(Booking::class);
    }

    public function availableFor($from, $to): bool // result will be boolean
    {
    	return 0 === $this->bookings()->betweenDates($from, $to)->count();
    }
}
