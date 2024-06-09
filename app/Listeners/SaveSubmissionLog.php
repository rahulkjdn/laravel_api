<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveSubmissionLog
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
     * @param  \App\Events\SubmissionSaved  $event
     * @return void
     */
    public function handle(SubmissionSaved $event)
    {
      
        $logMessage = "Record with name {$event->name} and email {$event->email} has been successfully Saved.";
        echo $logMessage;
        \Log::info($logMessage);
    }
}
