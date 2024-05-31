<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class Sendmailjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $detiles;
    public function __construct($detiles)
    {
        //
        $this->detiles=$detiles;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail=new SendMail($this->detiles);
        Mail::to($this->detiles['email'])->send($mail);
    }
}
