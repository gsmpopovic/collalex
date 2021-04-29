<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use Response; 

use App\Models\Headword as Headword;

use App\Models\Sense;
 

class QueryLexiconController extends Controller
{
    
    public function index(Request $request){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        $letter=$request->getContent(); 

        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->paginate();
    
        return Response::json($headwords);

    }

        // ****************** SEARCHBAR ****************** // 

    public function search(Request $request){

        $query_string = $request->input('nav-searchbar'); 
        $headwords = Headword::where('headword', $query_string)->with('senses')->get();

        return redirect()->route("display-lexicon")->with(["headwords"=>$headwords]);
    }

    // ****************** CREATING A NEW ENTRY ****************** // 

    public function create_entry(Request $request){
        // Headword fields:
        //
        //headword, pronunciation, user, updated/created

        // inputs:

        //  headword-input, pronunciation-input, 
        // dd($request);

        // sense fields:
        // syncat, g_eng, g_ceb, semdom_id, user, headword_id

        // sense inputs: 
        // semdom-input,eng-input, syncat-input, ceb-input,


        $headword = new Headword();
        $headword->headword=$request->input('headword-input');
        $headword->pronunciation=$request->input('pronnciatin-input');
        $headword->user=Auth::user()->id;
        $headword->save();

        $sense =new Sense();
        $sense->headword_id=$headword->id; 
        $sense->g_eng=$request->input('eng-input');
        $sense->g_ceb=$request->input('ceb-input');
        $sense->syncat=$request->input('syncat-input');
        $sense->semdom_id=$request->input('semdom-input');
        $sense->user=Auth::user()->id;

        $sense->save();
        
        return back();

    }

    // ****************** CREATING A NEW ENTRY ****************** // 

    public function update_entry(Request $request){
        // Headword fields:
        //
        //headword, pronunciation, user, updated/created

        // inputs:

        //  headword-input, pronunciation-input, 
        // dd($request);

        // sense fields:
        // syncat, g_eng, g_ceb, semdom_id, user, headword_id

        // sense inputs: 
        // semdom-input,eng-input, syncat-input, ceb-input,


        $id->$request->input('headword-id-input');
        $headword = where('id', $headword_id);
        $headword->headword=$request->input('headword-input');
        $headword->pronunciation=$request->input('pronnciatin-input');
        $headword->user=Auth::user()->id;
        $headword->save();

        $sense =new Sense();
        $sense->headword_id=$headword->id; 
        $sense->g_eng=$request->input('eng-input');
        $sense->g_ceb=$request->input('ceb-input');
        $sense->syncat=$request->input('syncat-input');
        $sense->semdom_id=$request->input('semdom-input');
        $sense->user=Auth::user()->id;

        $sense->save();
        
        return back();

    }
}
