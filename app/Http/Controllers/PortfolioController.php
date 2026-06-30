<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $contactMessage = ContactMessage::create($data);

        Mail::to('engelbertrodriguez21@gmail.com')->send(new ContactMessageMail($contactMessage));

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
