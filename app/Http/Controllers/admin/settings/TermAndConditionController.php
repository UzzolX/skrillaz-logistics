<?php

namespace App\Http\Controllers\admin\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\TermAndCondition;

class TermAndConditionController extends Controller
{
    public function index()
    {
        $blog = TermAndCondition::all();
        return view('admin.termscondition.terms-index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.termscondition.terms-create');
    }
}
