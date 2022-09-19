<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ADDED
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonInCharge extends Model
{
    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'first_name',
        'last_name',
        'inventory_id'
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }


    // AUTO LOADING RELATIONSHIP
    protected $with = ["inventory"];
}
