<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Optional;


class vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'registration_no', 'insurance_no', 'image'];
}
