<?php

namespace App\Listeners;

use App\Events\TimeResponse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TimeResponseListener
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
     * @param  TimeResponse  $event
     * @return void
     */
    public function handle(TimeResponse $event)
    {
        //
    }
}
