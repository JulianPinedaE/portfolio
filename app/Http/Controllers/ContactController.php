<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Datos del correo
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Envío del correo
        try {
            Mail::send([], [], function ($message) use ($data) {
                $message->to('juliang.developer@gmail.com')
                        ->subject($data['subject'])
                        ->text("Name: {$data['name']}\nEmail: {$data['email']}\nMessage: {$data['message']}") // Texto plano del correo
                        ->html("
                            <strong>Name:</strong> {$data['name']}<br>
                            <strong>Email:</strong> {$data['email']}<br>
                            <strong>Message:</strong> {$data['message']}
                        "); // HTML del correo

                $message->from($data['email']);
            });

            return response()->json(['success' => 'Message sent successfully!'], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to send message. Please try again later.'], 500);
        }
    }
}
