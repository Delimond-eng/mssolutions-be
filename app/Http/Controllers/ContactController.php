<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'service' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Récupérer les données et renommer 'message' en 'user_message'
        $data = $request->only('email', 'name', 'service', 'phone');
        $data['user_message'] = $request->input('message');

        // Envoi du mail
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('microsftsolutionbelgique@gmail.com')
                    ->replyTo($data['email'], $data['name'])
                    ->cc('gastondelimond@gmail.com', 'Service Client')
                    ->bcc('servicesoffice59@gmail.com', 'Service Client')
                    ->subject("Nouveau message de {$data['name']} via le site");
        });

        return response()->json([
            'status' => true,
            'message' => 'Message envoyé avec succès ! Merci de nous avoir contactés.'
        ]);
    }

}
