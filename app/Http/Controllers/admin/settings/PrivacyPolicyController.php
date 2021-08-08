<?php

namespace App\Http\Controllers\admin\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $blog = PrivacyPolicy::all();
        return view('admin.blog.blog-index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.blog-create');
    }
}
