<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// ADDED 
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use HasFactory, SoftDeletes;

    // FILLABLES
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'admin_id',
        'remarks',
        'status'
    ];

    // DATES
    protected $dates = ['deleted_at'];

    // RELATIONSHIP
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    // AUTO LOADING RELATIONSHIP
    protected $with = ['user', 'admin'];
}
