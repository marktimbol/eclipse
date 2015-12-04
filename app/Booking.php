<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_reference',
        'status',
        'comments'
    ];  

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function packages() {
        return $this->belongsToMany(Package::class, 'booking_details')
                    ->withPivot(
                        'adult_quantity', 
                        'child_quantity', 
                        'date', 
                        'date_submit', 
                        'time'
                    );
    }
}