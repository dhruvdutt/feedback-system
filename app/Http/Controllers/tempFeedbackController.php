<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
      return view('feedback');
    }

    public function create(Request $request)
    {
      return view('rating');
    }

    public function thankyou()
    {
      return view('thankyou');
    }
}
