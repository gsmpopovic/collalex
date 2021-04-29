<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        return view("dashboard.template.master");

    }

    public function lexicon(){
        
        return view("dashboard.template.lexicon");

    }

    public function display_create(){
        return view("dashboard.template.lexicon-create");
    }
}
