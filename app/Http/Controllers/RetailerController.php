<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function index()
    {
        return view('user.pages.for-retailers');
    }
}
