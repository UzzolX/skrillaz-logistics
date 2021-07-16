<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourierServiceController extends Controller
{
    public function index()
    {
        return view('user.pages.courier-service');
    }
}
