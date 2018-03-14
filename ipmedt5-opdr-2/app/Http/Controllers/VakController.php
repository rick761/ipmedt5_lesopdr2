<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use Illuminate\Support\Facades\Auth;

class VakController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('studentcheck');
    }

    public function index($model_id)
    {
        $huidige_module = Module::find($model_id);
        //$huidige_module = Module::find(1);
        //print_r($huidige_module);
        $user = Auth::user();
        $behaald_cijfer = '';

        foreach($user->cijfers as $cijfer){
            if ($cijfer->module_id == $huidige_module->id ){
                $behaald_cijfer = $cijfer->cijfer;
            }
        }

        return view('vak',['huidige_module' => $huidige_module, 'behaald_cijfer' => $behaald_cijfer]);
    }
    public function search(Request $request){

        $huidige_module = Module::find(1);
        $zoekSleutel = $request->input('searchquery');
        $gevondenModule = Module::where('name', '=', $zoekSleutel );

        if($gevondenModule->count() > 0) {

            return view('vak', ['huidige_module' => $gevondenModule->first()]);
        } else {
            $modules = Module::All();
            $message = 'Niks gevonden in de zoekactie';
            return view('home',['modules' => $modules, 'message' => $message]);
        }

    }
}
