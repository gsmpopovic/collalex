<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\Models\Headword as Headword; 
use App\Models\Sense;

class QueryPublicDictionaryController extends Controller
{
    //

    public function index (Request $request){

        $query_string = $request->input('query_word'); 

        // $query_string = $request->only('bantayanon_word'); 

        // return Response::json($query_string);

        // return Response::json($request->input('query_word'));
        
        // This would select all similar headwords.
        // $headwords = Headword::where('headword', 'LIKE', '%'.$query_string.'%')->with('senses')->get();
        // $headwords = Headword::where('headword', 'LIKE', '%'.$query_string.'%')->with('senses')->first();

        // Get the exact record. 
        // $headwords = Headword::where('headword',"= binary", $query_string)->with('senses')->get();

        $headwords = Headword::where('headword', $query_string)->with('senses')->get();

        return Response::json($headwords);
    }
}
