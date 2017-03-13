<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function checkToken(Request $request)
    {
      return "ok";
    }
}
