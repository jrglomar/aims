<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ADDED
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'location',
        'person_in_charge_id',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP


    // AUTO LOADING RELATIONSHIP
    protected $with = [];
}
