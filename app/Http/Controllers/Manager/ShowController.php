<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;
use App\Http\Requests\Manager\StoreRequest;
use App\Http\Requests\Manager\UpdateRequest;
use PDF;

class ShowController extends Controller
{
    public function __invoke(Manager $manager){
        return view('manager.show', compact('manager'));
    }
    public function createPDF(Request $request) {
        // retreive all records from db
        $data = Manager::all();
        // share data to view
        if ($request->has('export')) {
            if ($request->get('export') == 'pdf') {
                $pdf = PDF::loadView('pdfFile', compact('data'));
                return $pdf->download('manager-list.pdf');
            }
        }

        return view('manager.pdfFile', compact('data'));
      }
}
