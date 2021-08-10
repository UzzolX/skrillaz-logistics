<?php

namespace App\Http\Controllers\admin\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function __construct(){
        $this->middleware(['admin'],['except'=>array('indexFront')]);
    }
    
    public function indexFront()
    {
        //$privacyFront = PrivacyPolicy::all();
        return view('user.pages.company.privacy-and-policy');
    }
    
    public function index()
    {
        //$privacy = PrivacyPolicy::all();
        return view('admin.company.privacy-and-policy.privacy-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.privacy-and-policy.privacy-create');
    }
}
