<?php

namespace App\Listeners;

use App\Events\WelcomeUserEvent;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class WelcomeUserListener
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
    public function handle(WelcomeUserEvent $event): void
    {

                 Mail::to($event->user->email)->send(new WelcomeMail($event->user));
            
    }
}
