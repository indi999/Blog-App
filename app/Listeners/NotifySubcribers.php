<?php

namespace App\Listeners;

use App\Events\TreatedCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifySubcribers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  TreatedCreated  $event
     * @return void
     */
    public function handle(TreatedCreated $event)
    {
        // $event->thread
        var_dump($event->thread['name'] . 'was published to the forum.');
    }
}
