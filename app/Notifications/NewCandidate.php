<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCandidate extends Notification
{
    use Queueable;

    private $vacancy_id;
    private $vacancy_name;
    private $user_id;

    /**
     * Create a new notification instance.
     */
    public function __construct($vacancy_id, $vacancy_name, $user_id)
    {
        $this->vacancy_id = $vacancy_id;
        $this->vacancy_name = $vacancy_name;
        $this->user_id = $user_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/candidates/' . $this->vacancy_id);

        return (new MailMessage)
            ->greeting('Hola 👋')
            ->subject('Nuevo candidato recibido en tu oferta de empleo')
            ->line('Has recibido un nuevo candidato en tu oferta de empleo: ' . $this->vacancy_name . ".")
            ->action('Ver notificaciones', $url)
            ->line('¡Gracias por utilizar JobWaves!')
            ->salutation('Saludos, JobWaves');
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

    // Almacena las notificaciones en la DB
    public function toDatabase($notifiable)
    {
        return [
            'vacancy_id' => $this->vacancy_id,
            'vacancy_name' => $this->vacancy_name,
            'user_id' => $this->user_id
        ];
    }
}
