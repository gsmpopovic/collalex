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

        // Headword fields:
        //
        //headword, pronunciation, user, updated/created

        // inputs:

        //  headword-input, pronunciation-input,

        // sense fields:
        // syncat, g_eng, g_ceb, semdom_id, user, headword_id

        // sense inputs:
        // semdom-input,eng-input, syncat-input, ceb-input,


    // ****************** SEARCHBAR ****************** //

    public function search(Request $request)
    {
        // $query_string = $request->input('nav-searchbar');
        $query_string = $request->validate([
            'nav-searchbar' => 'alpha'        
            ]);

        $headwords = Headword::where('headword', $query_string)->with('senses')->orderBy('headword')->paginate(15);

        return redirect()->route("display-lexicon")->with(["headwords"=>$headwords]);
    }

    public function display_search()
    {

        // $headwords=Session::get("headwords");
        // error_log(serialize($headwords));
        // Session::put("headwords", $headwords);
        return view('dashboard.template.lexicon-search');
        // return view('dashboard.template.lexicon-search')->with(["headwords"=>$headwords]);
    }

    // ****************** VALIDATE HEADWORD ****************** //

    public function validate_entry(Request $request)
    {
        $headword=$request->getContent();

        $headword_inst = Headword::where('headword', '=', $headword)->first();

        if ($headword_inst) {
            return Response::json(["error"=>"Duplicate headword!"]);
        } else {
            return Response::json(["success"=>"That isn't already in the database!"]);
        }
    }
    // ****************** CREATING A NEW ENTRY ****************** //

    public function create_entry(Request $request)
    {

        $headword_valid= $request->validate([
            'headword-input' => 'alpha',
            'pronunciation-input'=>'alpha',
            'headword-input' => 'unique:headwords,headword'
            ]);

        $headword=$request->input('headword-input');

        $headword_inst = Headword::where('headword', '=', $headword)->first();

        if ($headword_inst) {

    // Do nothing.
        } else {
            $headword = new Headword();
            $headword->headword=$request->input('headword-input');
            $headword->pronunciation=$request->input('pronunciation-input');
            $headword->user=Auth::user()->id;
            $headword->vulgarity=$request->input('vulgar');

            $headword->save();

            // error_log(serialize($headword));

            $sense_valid= $request->validate([
                'eng-input' => 'alpha',
                'ceb-input'=>'alpha' 
                ]);

            $sense =new Sense();
            $sense->headword_id=$headword->id;
            $sense->g_eng=$request->input('eng-input');
            $sense->g_ceb=$request->input('ceb-input');
            $sense->syncat=$request->input('syncat-input');
            $sense->semdom_id=$request->input('semdom-input');
            $sense->user=Auth::user()->id;

            $sense->save();
        }

        return back();
    }

    // ****************** CREATING A NEW SENSE ENTRY ****************** //

    public function create_sense_entry(Request $request)
    {

        $sense_valid= $request->validate([
            'headword-input' => 'numeric',
            'eng-input' => 'alpha',
            'ceb-input'=>'alpha' 
            ]);

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

    public function update_entry(Request $request)
    {
                $headword_valid= $request->validate([
            'headword-input' => 'alpha',
            'pronunciation-input'=>'alpha' 

            ]);

        $headword_id=$request->input('headword-id-input');
        $headword = Headword::where('id', '=', $headword_id)->first();
        $headword->headword=$request->input('headword-input');
        $headword->pronunciation=$request->input('pronunciation-input');
        $headword->vulgarity=$request->input('vulgar');

        $headword->user=Auth::user()->id;
        $headword->save();

        // this will cycle through the arrays of inputs.

        if($request->sense_id_input ){

            // $sense_valid= $request->validate([
            //     'headword-input' => 'alpha',
            //     'eng-input' => 'alpha',
            //     'ceb-input'=>'alpha' 
            //     ]);

            // validate the values in each sense card as arrays
            $this->validate($request, [
                'eng-input.*' => 'alpha',
                'ceb-input.*'=>'alpha' 
            ]);
            

            foreach ($request->sense_id_input as $k => $sense_id) {
                $sense=Sense::where('id', '=', $sense_id)->first();
                $sense->g_eng=$request->input('eng-input')[$k];
                $sense->g_ceb=$request->input('ceb-input')[$k];
                $sense->syncat=$request->input('syncat-input')[$k];
                $sense->semdom_id=$request->input('semdom-input')[$k];
                $sense->user=Auth::user()->id;
                
                $sense->save();
            }

        }
        // return back();

        //get the first letter and return to that section
        $query=$request->input('headword-input')[0];
        return redirect()->route("lexicon_query_letter", $query);
    }

    // ****************** DELETING SENSE FROM AN ENTRY ****************** //

    public function delete_sense(Request $request)
    {

        // $sense_id=$request->getContent();

        // $sense=Sense::where('id', '=', $sense_id)->first();


        // if ($sense) {
        //     $sense->delete();
        //     return Response::json(["OK"]);
        // } else {
        //     return Response::json(["NOT OK"]);
        // }
    }
}

/***************************************************************************** */
/****************************** ARCHIVED ************************************* */
    
    // public function index(Request $request){

    //     // The idea here is to get a list of headword entries that start with a given letter,
    //     // as chosen by the user from the list of buttons on main lexicon page,

    //     $letter=$request->getContent();

    //     $csrf=Session::token();
    //     $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->paginate();
    
    //     return Response::json([$headwords, $csrf]);

    // }

    // public function index(Request $request)
    // {

    //     // The idea here is to get a list of headword entries that start with a given letter,
    //     // as chosen by the user from the list of buttons on main lexicon page,

    //     // $letter=$request->getContent();
    //     $letter=$request->input('selected');

    //     // dd($request->all());
    //     $headwords = Headword::where('headword', 'LIKE', $letter.'%')
    //     ->with('senses')
    //     ->orderBy('headword')->simplePaginate(15);
    
    //     $headwords->withPath('display-searchlexicon');
    //     // $headwords = Headword::where('headword', 'LIKE', $letter.'%')->with('senses')->orderBy('headword')->simplePaginate(15);
    
    //     // return  view('dashboard.template.lexicon')->with(["headwords"=>$headwords]);
        
    //     return redirect()->route("display-lexicon")->with(["headwords"=>$headwords]);
    // }

