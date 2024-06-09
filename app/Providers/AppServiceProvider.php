<?php

namespace App\Providers;

use App\Events\SubmissionSaved;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Queue::after(function (JobProcessed $event) {
            switch ($event->job->resolveName()) {
                case 'App\Jobs\SaveSubmissionJob':
                    $payload = json_decode( $event->job->getRawBody() );
                    $data = unserialize( $payload->data->command );
                    $submissionData = $data->data;
                    $user = $submissionData['name'];
                    $email = $submissionData['email'];
                    event(new SubmissionSaved($user, $email));
                    break;
                
                default:
                    # code...
                    break;
            }
        });
    }
}
