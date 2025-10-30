<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InspectionReportMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    // public $inspectionData;
    // public function __construct($inspectionData)
    // {
    //     $this->inspectionData = $inspectionData;
    // }

       public $pdf;
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    public function build()
    {
        // return $this->markdown('emails.contact_us')->with('data', $this->data)->subject($this->data['subject']);
        // return $this->subject('New Contact Form Submission')->view('pages.contact');

        return $this->from('info@amtcoaches.co.uk', 'AMT-Coaches')
        ->subject('Inspection Report')
         ->view('emails.empty')
        //    ->subject($this->inspectionData['subject'])
        //    ->markdown('emails.inspection_mail')
        //    ->with('inspectionData', $this->inspectionData);
         ->attachData($this->pdf, 'inspection_mail.pdf', [
                'mime' => 'application/pdf',
            ]);
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Inspection Report Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
