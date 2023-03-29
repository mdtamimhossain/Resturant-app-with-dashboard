<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $email,$date;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $email,string $date)
    {
        $this->email = $email;
        $this->date = $date;
    }

    /**
     * Execute the job.
     *
     * @return RedirectResponse
     */
    public function handle()
    {
        $email = $this->email;
        $date = $this->date;
        $message = 'Dear sir, your reservation has been confirmed for ' . $date;

        Mail::send([], [], function ($mail) use ($email, $message) {
            $mail->from('simplehouse@gmail.com');
            $mail->to($email);
            $mail->subject('Reservation Confirmation');
            $mail->text($message); // Add a text part to the email message
        });

        return redirect()->route('dashboard.reservation');
    }
}
