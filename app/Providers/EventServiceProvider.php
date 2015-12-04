<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserPurchasedAPackage' => [
            'App\Listeners\SendPaymentReceipt',
            'App\Listeners\Admin\SendPurchasedNotification',
        ],   

        'App\Events\UserPurchaseWasNotSuccessful' => [
            'App\Listeners\SendPurchaseError',
        ],   

        'App\Events\UserBookedAPackage' => [
            'App\Listeners\SendBookingInformation',
            'App\Listeners\Admin\SendBookingNotification',
        ],     

        'App\Events\UserBookingWasNotSuccessful' => [
            'App\Listeners\SendBookingError',
        ],  

        'App\Events\BookingWasConfirmed' => [
            'App\Listeners\SendBookingConfirmation',
        ],                                    
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
