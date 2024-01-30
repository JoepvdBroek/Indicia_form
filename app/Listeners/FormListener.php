<?php

namespace App\Listeners;

use App\Events\FormSubmitted;
use App\Mail\CompanyFormSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class FormListener implements ShouldQueue
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
    public function handle(FormSubmitted $event): void
    {
        Mail::to($event->companyForm->email_of_financial_correspondence)->send(new CompanyFormSubmitted($event->companyForm));
    }
}
