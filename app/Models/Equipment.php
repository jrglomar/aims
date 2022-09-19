<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ADDED
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'description',
        'inventory_id',
        'condition_id',
        'source_id',
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'inventory_id');
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class, 'inventory_id');
    }

    // AUTO LOADING RELATIONSHIP
    protected $with = ["inventory", "source", "condition"];
}
