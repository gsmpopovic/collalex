<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headword; 

class QueryPublicDictionaryController extends Controller
{
    //

    public function index (Request $request){

        $query_string = $request->q; 

        $headwords = App\Models\Headword::where('headword', 'LIKE', '%'.$query_string.'%')->get();

        return view('dictionary.template.show', ['headwords'=>$headwords]);
    }
}
