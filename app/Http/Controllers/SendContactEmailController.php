<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class SendContactEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data['subject'] = 'Mensagem Enviada do Site';

        $contact = ContactMessage::create($data);

        SendContactEmail::dispatch($contact);

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
