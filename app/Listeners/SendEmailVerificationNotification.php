<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification as SendEmailVerificationNotificationBase;

class SendEmailVerificationNotification
    extends SendEmailVerificationNotificationBase implements ShouldQueue
{

    use InteractsWithQueue;
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
