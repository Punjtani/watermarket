<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use App\Notifications\OrderPlaced;
use App\Notifications\OrderApproved;
use Illuminate\Support\Facades\Notification;

class OrderPlaced2
{
    public function created(Order $order)
    {
       $v=Customer::find($order->customer_id);
       $user= User::first();
       Notification::send($user, new OrderPlaced($v,$order));
    }

    public function  updated(Order $order)
    {
    //    $v=Customer::find($order->customer_id);
        $user= User::first();
       Notification::send($user, new OrderApproved);
    }
}
