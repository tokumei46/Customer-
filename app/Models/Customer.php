<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function shop() 
    {
        return $this->belongsTo(Shop::class);
    }

    public function customerLogs() 
    {
        return $this->hasMany(CustomerLog::class);
    }
}
