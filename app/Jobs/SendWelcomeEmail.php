<?php

namespace App\Jobs;

use App\Mail\DemoEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $demo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo "Start send email";

        $demoMail = new DemoEmail($this->demo);
        Mail::to($this->demo->email)->send($demoMail);

        echo "End send email";
    }
}
