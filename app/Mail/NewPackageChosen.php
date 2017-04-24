<?php

namespace App\Mail;

use App\Models\Package;
use App\Models\Payer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewPackageChosen extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Package
     */
    public $payer;

    /**
     * Create a new message instance.
     *
     * @param Payer $payer
     * @internal param Package $package
     */
    public function __construct(Payer $payer)
    {
        //
        $this->payer = $payer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Package Accepted.')
            ->markdown('emails.user.new-package-chosen');
    }
}
