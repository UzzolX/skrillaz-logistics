<?php

namespace App\Http\Controllers\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NextDayDeliveryController extends Controller
{
    public function index()
    {
        return view('user.pages.services.next-day-delivery');
    }
}
