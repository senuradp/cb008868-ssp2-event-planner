<?php

namespace App\Notifications;

use App\Models\Finance\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingSuccess extends Notification
{
    use Queueable;

    public Booking $booking;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Buttercup Events - Booking Success')
            ->greeting('Hello ! ' . $notifiable->name . ',')
            ->line('Your reservation has been placed successfully.')
            ->line('Your booking reference number is: ' . $this->booking->id)
            ->line('Your booking details are as follows:')
            ->line('Event Name: ' . $this->booking->event->title)
            ->line('Event Date: ' . $this->booking->event->date)
            ->line('Event Time: ' . $this->booking->event->time)
            ->line('Event Venue: ' . $this->booking->event->venue)
            ->line('Package Name: ' . $this->booking->package->title)
            ->line('Package Price: LKR ' . number_format($this->booking->package->price, 2))
            ->line('Total Price: LKR ' . number_format($this->booking->total_price, 2))
            ->action('View Booking', url(route('user.booking.my-bookings')))
            ->line('Thank you for booking with us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
