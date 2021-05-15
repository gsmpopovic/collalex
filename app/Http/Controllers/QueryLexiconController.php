<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use Response; 
use Session;

use App\Models\Headword as Headword;

use App\Models\Sense;
 

class QueryLexiconController extends Controller
{
    
    // public function index(Request $request){

    //     // The idea here is to get a list of headword entries that start with a given letter, 
    //     // as chosen by the user from the list of buttons on main lexicon page,

    //     $letter=$request->getContent(); 

    //     $csrf=Session::token();
    //     $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->paginate();
    
    //     return Response::json([$headwords, $csrf]);

    // }

    public function index(Request $request){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        $letter=$request->getContent(); 

        $csrf=Session::token();
        $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->paginate();
    
        return  view('lexicon.blade.php');
    }

    public function pagination(Request $request){

        // The idea here is to get a list of headword entries that start with a given letter, 
        // as chosen by the user from the list of buttons on main lexicon page,

        return view('lexicon.blade.php');

    }

        // ****************** SEARCHBAR ****************** // 

    public function search(Request $request){

        $query_string = $request->input('nav-searchbar'); 
        $headwords = Headword::where('headword', $query_string)->with('senses')->get();

        return redirect()->route("display-lexicon")->with(["headwords"=>$headwords]);
    }

    public function display_search(){

        // $headwords=Session::get("headwords");
        // Session::put("headwords", $headwords);
        return view('dashboard.template.lexicon-search');
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
        $headword->pronunciation=$request->input('pronunciation-input');
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

        // ****************** CREATING A NEW HEADWORD ENTRY ****************** // 

        public function create_sense_entry(Request $request){
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
    
    
            // $headword = new Headword();
            // $headword->headword=$request->input('headword-input');
            // $headword->user=Auth::user()->id;
            // $headword->save();
    
            $sense =new Sense();
            $sense->headword_id=$request->input('headword-input');
            $sense->g_eng=$request->input('eng-input');
            $sense->g_ceb=$request->input('ceb-input');
            $sense->syncat=$request->input('syncat-input');
            $sense->semdom_id=$request->input('semdom-input');
            $sense->user=Auth::user()->id;
    
            $sense->save();
            
            return back();
    
        }

    // ****************** UPDATING AN ENTRY ****************** // 

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

        
        $headword_id=$request->input('headword-id-input');
        $headword = Headword::where('id', '=', $headword_id)->first();
        $headword->headword=$request->input('headword-input');
        $headword->pronunciation=$request->input('pronunciation-input');
        $headword->user=Auth::user()->id;
        $headword->save();

        // this will cycle through the arrays of inputs.
        foreach($request->sense_id_input as $k => $sense_id){
            $sense=Sense::where('id', '=', $sense_id)->first();
            $sense->g_eng=$request->input('eng-input')[$k];
            $sense->g_ceb=$request->input('ceb-input')[$k];
            $sense->syncat=$request->input('syncat-input')[$k];
            $sense->semdom_id=$request->input('semdom-input')[$k];
            $sense->user=Auth::user()->id;
            
            $sense->save();
    }        
        return back();

    }

        // ****************** DELETING SENSE FROM AN ENTRY ****************** // 

        public function delete_sense(Request $request){

        // sense fields:
        // syncat, g_eng, g_ceb, semdom_id, user, headword_id

        // sense inputs: 
        // semdom-input,eng-input, syncat-input, ceb-input,

        // $sense=Sense::where('headword_id', '=', $headword_id)->first(); 
        // $sense=Sense::find( $sense_id)->first(); 

        
        $sense_id=$request->getContent(); 

        $sense=Sense::where('id', '=', $sense_id)->first(); 
        error_log(serialize($sense_id));

        error_log(serialize($sense));

        if ($sense)
        {$sense->delete();
           return Response::json(["OK"]);

        } else{
            return Response::json(["NOT OK"]);

        }

        
        }
}
