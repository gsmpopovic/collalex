<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headword as Headword;
use App\Models\User as User;
use App\Models\Sense;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        return view("dashboard.template.welcome");

    }


    public function lexicon(){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        $letter='a';

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->paginate(15);
    
        return view("dashboard.template.lexicon")->with(["headwords"=>$headwords]);


    }

    public function lexicon_query_letter($query){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        $headwords = Headword::where('headword', 'LIKE', $query.'%')->with('senses')->orderBy('headword')->paginate(15);
    
        return view("dashboard.template.lexicon")->with(["headwords"=>$headwords]);


    }

    public function display_create(){
        return view("dashboard.template.lexicon-create");
    }

    
    public function display_sense_create(){
        return view("dashboard.template.lexicon-create-sense");
    }

    public function display_users(){

        $users = User::paginate(15);
        return view("dashboard.template.users", ["users"=>$users]);
    }

    public function display_changelog(){
        $updated = DB::table("activity_log")->where('description', '=', 'updated')->latest()->paginate(15);
        $created = DB::table("activity_log")->where('description', '=', 'created')->latest()->paginate(15);

        return view("dashboard.template.changelog", ["updated"=>$updated, "created"=>$created]);
    }
}
