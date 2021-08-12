<?php

namespace App\Http\Controllers\oursolutions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologySolutionController extends Controller
{
    public function index()
    {
        return view('user.pages.our-solutions.technology-solutions');
    }
}
