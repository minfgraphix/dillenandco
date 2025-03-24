<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendcontactmessage(Request $r){
        $validator = Validator::make($r->all(), $this->validateFields());

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        try {
            $data = [
                'email' => $r->email,
                'name' => $r->name,
                'phone' => $r->phone,
                'message' => $r->message,
            ];

            Mail::to('josia710@gmail.com')->send(new ContactMail($data));
            Log::info('Contact form email sent successfully', ['data' => $data]);
            return back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to send contact form email', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->with('error', 'Failed to send message. Please try again later.');
        }
    }

    private function validateFields(){
        return [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required|min:10',
        ];
    }
}
