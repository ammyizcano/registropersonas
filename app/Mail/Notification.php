<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Persona as PersonaVariable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;

class Notification extends Mailable
{
    use Queueable, SerializesModels;
    public PersonaVariable $persona;

    /**
     * Create a new message instance.
     */
    public function __construct(PersonaVariable $persona)
    {
        $this->persona = $persona;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('ammy.izcano@ujcv.edu.hn', 'Ammy Izcano'),
             replyTo: [
             new Address('ammy.izcano@ujcv.edu.hn', 'Ammy Izcano'),
             ],
            subject: 'Notification',
        );
    }  

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notification',
            text: 'emails.notification-text'
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


  
    
    public function build()
    {
        return $this->subject($this->persona->nombre.' Datos de vacunación desde ammy.domtemporal.com')->view('persona.email');
    } 
}
