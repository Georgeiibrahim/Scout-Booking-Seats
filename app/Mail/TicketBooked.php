<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class TicketBooked extends Mailable
{
    use Queueable, SerializesModels;
    public $ref_no;
    /**
     * Create a new message instance.
     */
    public function __construct($ref_no)
    {
        //
        $this->ref_no = $ref_no;
       
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('kirilloshelal@gmail.com', 'Scout Party 2024'),
            subject: 'Scout Party Ticket Booked',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'booking.demo',
            with: [
                'ref_no' => $this->ref_no,
                
            ],
            
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
