<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifable, $url) {
            return (new MailMessage)
                ->subject('Verificar cuenta de correo')
                ->line('Para activar tu cuenta, haz clic en el botón "Confirmar cuenta" de a continuación.')
                ->action('Confirmar cuenta', $url)
                ->line('Si no has creado esta cuenta, puedes ignorar este mensaje.');
        });
    }
}
