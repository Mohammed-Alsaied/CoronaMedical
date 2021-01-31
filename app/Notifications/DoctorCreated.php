<?php

namespace App\Notifications;
use App\Models\Doctor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/*class DoctorCreated extends Notification
{
    use Queueable;

    public $doctor;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    /*public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
   /* public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
   /* public function toMail($notifiable)
    {
        $subject  = sprintf('%s: تم تسجيل حسابك بنجاح %s',config('app.name'),'admin');
        $greeting = sprintf('%s مرحبا بك',$notifiable->fullname);
        return (new MailMessage)
                    ->subject($subject)
                    ->greeting($greeting)
                    ->line('')
                    ->line('شكرا لك لتعاونك معنا للقضاء علي هذا الفيروس.')
                    ->action('Corona Medical', url('/medical'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    /*public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
