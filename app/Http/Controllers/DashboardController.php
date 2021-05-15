<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headword as Headword;

use App\Models\Sense;

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

    // public function lexicon(){
        
    //     return view("dashboard.template.lexicon");

    // }

    public function lexicon(){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        $letter='a';

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->simplePaginate(15);
    
        return view("dashboard.template.lexicon")->with(["headwords"=>$headwords]);


    }

    public function display_create(){
        return view("dashboard.template.lexicon-create");
    }

    
    public function display_sense_create(){
        return view("dashboard.template.lexicon-create-sense");
    }
}
