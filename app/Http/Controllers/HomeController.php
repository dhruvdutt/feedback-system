<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
      return view('welcome');
    }

    public function checkToken(Request $request)
    {
      $token = '123456';

      if ($token === $request->token) {
        return redirect('course-selection');
      } else {
        return redirect('/')->with('message', 'The token is incorrect');
      }
    }
}
