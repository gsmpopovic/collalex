<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response; 

use App\Models\Headword as Headword;
use App\Models\Sense;
class QueryLexiconController extends Controller
{
    
    public function index(Request $request){

        dd($request);
        $letter=$request->input('query_letter');
        echo $letter; 

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses');
        Response::json($headwords);

    }
}
