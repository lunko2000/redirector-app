<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect(Request $request)
    {
        // Get the user agent string from the request
        $userAgent = strtolower($request->header('User-Agent'));

        // Check if the user agent indicates an iOS device
        if (stripos($userAgent, 'iphone') !== false || stripos($userAgent, 'ipad') !== false) {
            return redirect()->away('https://www.apple.com/app-store/'); // Replace with your App Store link
        }

        // Check if the user agent indicates an Android device
        if (stripos($userAgent, 'android') !== false) {
            return redirect()->away('https://play.google.com/store'); // Replace with your Play Store link
        }

        // Default redirect (e.g., if user agent is unclear, like a desktop browser)
        return redirect()->away('https://play.google.com/store'); // Replace with a fallback URL
    }
}