<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ReviewsController extends Controller
{
    public function reviews()
    {
        return view('reviews');
    }
    public function show_reviews()
    {
        $contacts = DB::table('contacts')->get()->toArray();
        return view('contacts', ['contacts' => $contacts]);
    }
    public function reviews_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);
        $review = new Contact();
        //       dd($review);
        $review->date = date("m.d.y");
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');
        $review->save();
        return redirect()->route('reviews');
    }
    //
}
