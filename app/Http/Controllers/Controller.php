<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->validate(['email' => 'required|email']);
    
        SendEmailJob::dispatch($email);
    
        return response()->json(['message' => 'Email has been queued']);
    }
    
}
