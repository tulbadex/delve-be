<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\NewsLetter;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Store subscriber in database
        // This is just a placeholder - implement your database logic here

        /* Newsletter::create([
            'name' => $request->name,
            'email' => $request->email
        ]); */
        
        // Send welcome email
        Mail::to($request->email)
            ->queue(new NewsletterMail($request->name, $request->email));

        return response()->json([
            'success' => true,
            'message' => 'You have successfully subscribed to our newsletter!'
        ]);
    }

    public function unsubscribe(Request $request, $email)
    {
        // Implement unsubscribe logic here
        // Remove the email from your subscribers list
        
        return view('newsletter.unsubscribe', [
            'email' => $email,
            'status' => 'success'
        ]);
    }
}
