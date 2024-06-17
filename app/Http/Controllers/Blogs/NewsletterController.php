<?php

namespace App\Http\Controllers\Blogs;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\SubscriptionConfirmation;
use App\Mail\UnsubscribeConfirmation;
use Illuminate\Http\Request;
use App\Models\subscriber;

class NewsletterController extends Controller
{
    //
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
            'name' =>  'required'
        ]);

        Subscriber::create([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        $userName = $request->input('name');
        $userEmail = $request->input('email');
        Mail::to($request->email)->send(new SubscriptionConfirmation($userName, $userEmail));

        return redirect()->back()->with('success', 'Subscribed successfully');
    }

    public function unsubscribeView($email)
    {
        if ($email) {
            return view('mail.unsbscribing', compact('email'));
        }
    }

    public function unsubscribe(Request $request)
    {
        $email = $request->email;
        $user = subscriber::where('email', $email)->first();
        if ($user) {
            $userName = $user->name;
            $userEmail = $user->email;
            $user->delete();

            Mail::to($userEmail)->send(new UnsubscribeConfirmation($userName));
        }
    }
}
