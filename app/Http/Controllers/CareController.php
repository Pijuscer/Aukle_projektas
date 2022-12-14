<?php

namespace App\Http\Controllers;
use App\Models\care;
use Illuminate\Http\Request;

class CareController extends Controller
{
    public function index(){
        $cares = care::all();
        return view('add_cares', compact('cares'));
        
    }
    public function viewForm(){
        $care = care::all();
        return view('cares', ['cares' => $care]);

    }
    public function store(Request $request){
        
        $validated = $request -> validate([
            'take_of_care' => 'required|max:225|',
            'when' => 'required|max:225|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/',

        ]);

        care::create([
            'take_of_care' => request('take_of_care'),
            'when' => request('when'),
        ]);

        return redirect('/cares')->with('message', 'Sėkmingai pridėjote!');
    }
    public function editForm($id){
        $cares = care::where('id', $id)->firstOrFail();

        return view('edit_cares',compact("cares"));
    }
    public function edit(Request $request, $id){

         $validated = $request -> validate([
            'take_of_care' => 'required|max:225',
            'when' => 'required|max:225|regex:/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/',
    
         ]);
         
        $cares = care::where('id', $id)->firstOrFail();

        $cares->take_of_care = request('take_of_care');
        $cares->when = request('when');
        $cares->save();

        return redirect('/cares')->with('message_edit', 'Sėkmingai redagavote!');
    }
    public function removeForm($id){
        $cares = care::where('id', $id)->firstOrFail(); 

        return view('remove_cares]',compact("cares"));
    }
    public function remove($id){
        $cares = care::where('id', $id)->firstOrFail();
        $cares->delete();

        return redirect('/cares')->with('message_delete', 'Sėkmingai ištrynėte!');
    }
}
