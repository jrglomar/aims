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
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function person_in_charges()
    {
        return $this->hasMany(PersonInCharge::class, 'inventory_id')->without('inventory');
    }


    // AUTO LOADING RELATIONSHIP
    protected $with = ["person_in_charges"];
}
