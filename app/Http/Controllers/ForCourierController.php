<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForCourierController extends Controller
{
    public function index()
    {
        return view('user.pages.forcourier');
    }
}
