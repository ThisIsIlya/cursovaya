<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Manager\ShowController;
use PDF;

class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('preview');
    }

    public function generatePDF()
    {
        $data = Manager::all();
      // share data to view
      view()->share('manager',$data);
      $pdf = PDF::loadView('pdf_view', $data);
        return $pdf->download('demo.pdf');
    }
}
