<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function terms(Request $request)
    {
      return view('admin.terms')
        ->with(['ids'=>[1, 2, 3], 'terms' => ['first', 'second', 'third']]);
    }

    public function dashboard(Request $request)
    {
      return view('admin.dashboard');
    }
}
