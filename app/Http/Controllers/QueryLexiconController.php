<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response; 

use App\Models\Headword as Headword;
use App\Models\Sense;
class QueryLexiconController extends Controller
{
    
    public function index(Request $request){

        // dd($request);
        // $letter=$request->input(); 

        $letter=$request->getContent(); 

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->get();
    
        // dd($headwords);
        return Response::json($headwords);

    }
}
