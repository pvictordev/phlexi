<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Models\Project;
use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProjectOffered extends Notification
{
    use Queueable;

    protected $project;
    protected $freelancer;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $freelancer, Project $project)
    {
        //
        $this->project = $project;
        $this->freelancer = $freelancer;

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
            ->subject('New Bid on Your Project')
            ->greeting('Hello ' . $notifiable->name . '!')
            ->line("{$this->freelancer->name} has placed a bid on your project titled: '{$this->project->title}'.")
            ->action('View Project', url("/offers/received"))
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
