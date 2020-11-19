<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected  $guarded=['id'];
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public static function boot()
    {
        parent::boot();
        Order::observe(new \App\Observers\OrderPlaced2);
    }
}
