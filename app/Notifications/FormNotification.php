<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormNotification extends Notification
{
    use Queueable;

    public $name_plaintiff;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $name_plaintiff)
    {
        $this->name_plaintiff = $name_plaintiff;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->from('defensoriauniversitaria@unamba.edu.pe', 'Defensoría Universitaria')
            ->subject('Notificación de envio del formulario de defensoría universitaria')
            ->line($this->name_plaintiff . ' .Gracias por enviar el formulario. Tu solicitud será atendido a la brevedad posible.')
            ->line('Si tienes alguna duda, no dudes en contactarnos.')
            ->line('Att. Defensoría Universitaria - UNAMBA');
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
}
