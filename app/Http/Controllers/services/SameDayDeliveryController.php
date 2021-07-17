<?php

namespace App\Http\Controllers\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SameDayDeliveryController extends Controller
{
    public function index()
    {
        return view('user.pages.services.same-day-delivery');
    }
}
