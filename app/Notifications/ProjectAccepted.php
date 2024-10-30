<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Offer;

class ProjectAccepted extends Notification
{
    use Queueable;
    protected $offer;
    protected $response;


    /**
     * Create a new notification instance.
     */
    public function __construct(Offer $offer, $response)
    {
        //
        $this->offer = $offer;
        $this->response = $response;
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
          $status = $this->response ? 'accepted' : 'declined';
          
           return (new MailMessage)
                ->subject('Response to Your Offer')
                ->greeting('Hello!')
                ->line("Your offer for the project '{$this->offer->project->title}' has been {$status}.")
                ->action('View Project', url('/dashboard/freelancer'))
                ->line('Thank you for using our platform!');
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
