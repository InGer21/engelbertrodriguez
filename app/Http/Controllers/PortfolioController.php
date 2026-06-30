<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create($data);

        return back()->with('success', 'Mensaje enviado correctamente. Gracias por contactarme.');
    }

    public function downloadCv()
    {
        $path = storage_path('app/public/cv.pdf');

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->download($path, 'Engelbert_Rodriguez_CV.pdf');
    }
}
