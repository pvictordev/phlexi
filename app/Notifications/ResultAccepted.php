<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Result;

class ResultAccepted extends Notification
{
    use Queueable;

    protected $result;

    /**
     * Create a new notification instance.
     */
    public function __construct(Result $result)
    {
        //
        $this->result = $result;
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
        $status = $this->result->status === 1 ? 'accepted' : 'declined';
        
        return (new MailMessage)
            ->subject("Your Project Submission Has Been {$status}")
            ->greeting('Hello!')
            ->line("Your submission for the project '{$this->result->project->title}' has been {$status} by the client.")
            ->action('View Submission', url("/dashboard/freelancer/results/{$this->result->id}"))
            ->line('Thank you for your hard work!');
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
