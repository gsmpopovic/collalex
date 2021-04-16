<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headword as Headword;
use App\Models\Sense;
class LexiconController extends Controller
{
    
    public function index($letter){

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses');
        Response::json($headwords);

    }
}
