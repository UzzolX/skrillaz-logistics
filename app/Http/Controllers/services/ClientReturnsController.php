<?php

namespace App\Http\Controllers\services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientReturnsController extends Controller
{
    public function index()
    {
        return view('user.pages.services.client-returns');
    }
}
