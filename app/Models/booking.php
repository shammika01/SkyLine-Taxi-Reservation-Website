<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Optional;


class booking extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // Specify the table name if it differs from the model's plural form

    // Define any relationships with other models, if applicable
    public function vehicle()
    {
        return $this->belongsTo(vehicle::class);
    }

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'dateTime',
        'passengers',
        'pickup',
        'dropoff'
    ];


    protected $dates = [
        'dateTime'
    ];
}
