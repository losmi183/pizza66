<?php

namespace App\Listeners;

use App\Events\PizzaOrdered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PizzaOrderedListener
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
     * @param  PizzaOrdered  $event
     * @return void
     */
    public function handle(PizzaOrdered $event)
    {
        //
    }
}
