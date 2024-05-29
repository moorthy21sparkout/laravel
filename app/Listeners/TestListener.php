<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Session\Session;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session as FacadesSession;

class TestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\TestEvent  $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        $event= new TestEvent("Sudhan");
        $eventName=$event->getname();
        Log::info("Hi, I'm {$eventName}");
        FacadesSession::put('success','butten clicked');
    }
}
