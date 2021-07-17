<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForBusinessController extends Controller
{
    public function index()
    {
        return view('user.pages.forbusiness');
    }
}
