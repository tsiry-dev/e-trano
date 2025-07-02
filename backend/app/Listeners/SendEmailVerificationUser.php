<?php

namespace App\Listeners;

use App\Events\Auth\NewUserCreated;
use App\Mail\VerifyUserEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailVerificationUser
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
    public function handle(NewUserCreated $event): void
    {
        try {
            // sleep(5);
            Mail::to($event->user->email)
                ->send(new VerifyUserEmail($event->user));

        } catch (\Symfony\Component\Mailer\Exception\TransportException $e) {
        // MailDev n’est pas lancé, on ignore l’erreur
              logger()->warning('MailDev non disponible : ' . $e->getMessage());
        }
    }
}
