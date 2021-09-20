<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewModel;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function review() {
        return view('review');
        }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $review = new ReviewModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }



}
