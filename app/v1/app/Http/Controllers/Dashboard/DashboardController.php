<?php

namespace App\Http\Controllers\Dashboard;

// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class DashboardController extends Controller
{

    public function index()
    {
        $value = 10;
        return view('dashboard.dashboard-index', compact('value'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function tcpdf()
    {
        $filename = 'hello_world.pdf';

        $data = [
            'title' => 'Hello world!'
        ];

        $view = View::make('tcpdf', $data);
        $html = $view->render();

        // dd($view, $html);

        // return view('tcpdf');

        $pdf = new TCPDF;

        $pdf::SetTitle('Hello World');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output(public_path($filename), 'F');

        return response()->download(public_path($filename));
    }

    public function wkhtmltopdf()
    {
        $pdf = PDF::loadView('wkhtmltopdf');
        return $pdf->download('wkhtmltopdf.pdf');    }
}
