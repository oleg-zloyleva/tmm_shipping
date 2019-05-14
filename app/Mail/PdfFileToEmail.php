<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade as DomPDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PdfFileToEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $viewName;
    protected $pdfViewName;
    protected $pdfName;
    protected $subjectName;
    protected $request;

    /**
     * PdfFileToEmail constructor.
     *
     * @param string $viewName
     * @param string $pdfViewName
     * @param string $pdfName
     * @param string $subjectName
     * @param array $request
     */
    public function __construct(string $viewName, string $pdfViewName, string $pdfName, string $subjectName, array $request)
    {
        $this->pdfViewName = $pdfViewName;
        $this->viewName = $viewName;
        $this->pdfName = $pdfName;
        $this->subjectName = $subjectName;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = DomPDF::loadView($this->pdfViewName, $this->request)->stream();

        return $this
            ->from('info@tmminternational.com')
            ->subject($this->subjectName)
            ->view($this->viewName)
            ->attachData($content, $this->pdfName, ['mime' => 'application/pdf']);
    }
}
