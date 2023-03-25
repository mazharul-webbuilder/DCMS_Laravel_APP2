<?php

namespace App\Http\Controllers;

use App\Models\Calculation;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
class PDFController extends Controller
{
    public function pdfMake($id)
    {
        $data = Calculation::find($id);

        return $data;

        $pdf = new Dompdf();

        $pdf->loadView('data_in_pdf', $data );

        // Render the PDF
        $pdf->render();

        // Output PDF as a response
        return $pdf->stream();
    }

}
