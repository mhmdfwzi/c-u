<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\User;
use App\Notifications\OrderCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event ): void
    {
        //
        $order = $event->order;

        
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'Admin');
        })->get();     
        
        // dd($admins);

        
        // send notifications to all admins
        Notification::send($admins, new OrderCreatedNotification($order));
        
    }
}