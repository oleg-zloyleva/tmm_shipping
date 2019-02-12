<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PdfFileToEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $content;
    protected $viewName;
    protected $pdfName;
    protected $subjectName;

    /**
     * PdfFileToEmail constructor. Create a new message instance.
     * @param $content
     * @param string $viewName
     * @param string $pdfName
     */
    public function __construct($content, string $viewName, string $pdfName, string $subjectName)
    {
        $this->content = $content;
        $this->viewName = $viewName;
        $this->pdfName = $pdfName;
        $this->subjectName = $subjectName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@tmminternational.com')
            ->subject($this->subjectName)
            ->view($this->viewName)
            ->attachData($this->content, $this->pdfName, ['mime' => 'application/pdf',]);
    }
}
