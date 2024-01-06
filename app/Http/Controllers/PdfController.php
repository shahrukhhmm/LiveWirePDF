<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generateAndDownloadPdf(Request $request)
    {
       
        $data = $request->all();
        
        $pdf = Pdf::setOption(['isHtmlParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif'])
        ->loadView('livewire.pdf', $data) 
        ->setPaper('A4', 'portrait');

        $filename = 'generated_pdf';

        return $pdf->download($filename . '.pdf');
    }
}