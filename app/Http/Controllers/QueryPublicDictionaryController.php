<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\Models\Headword as Headword; 

class QueryPublicDictionaryController extends Controller
{
    //

    public function index (Request $request){

        $query_string = $request->input('bantayanon_word'); 

        $headwords = Headword::where('headword', 'LIKE', '%'.$query_string.'%')->get();

        return Response::json($headwords);
    }
}
