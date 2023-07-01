<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class PDFController extends Controller
{
    public function downloadPDF()
    {
        // Fetch data from SQL table
        $data = DB::table('apointment')->get();

        // Generate PDF using DomPDF library
        $pdf = PDF::loadView('pdf.table', ['data' => $data]);

        // Set PDF file name
        $filename = 'table_data.pdf';

        // Download the PDF file
        return $pdf->download($filename);
    }
}
