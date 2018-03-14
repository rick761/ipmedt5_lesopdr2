<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\User;
use App\Cijfer;

class AdminPanelController extends Controller
{
    //
    public function index(){
        $studenten = User::All()->where('type','=','student');
        return view('adminPanel',[ 'modules' => Module::All(), 'studenten' => $studenten ]);
    }
    public function saveCijfers(Request $request){

        //var_dump($request->all());
        $message = 'clicked on save button ';
        foreach($request->all() as $input_naam => $input_waarde){
            $user_id = explode("_", $input_naam)[0];
            $vak_id = explode("_", $input_naam)[1];
            if(!empty($input_waarde)){
                //var_dump('user_id:'.$user_id.' vak_id: '.$vak_id.'      '.$input_waarde);
                $gevonden_cijfer = Cijfer::All();
                $gevonden_cijfer = $this->filterCijfers($gevonden_cijfer,'user_id',$user_id);
                $gevonden_cijfer = $this->filterCijfers($gevonden_cijfer,'module_id',$vak_id);
                $gevonden_cijfer = $gevonden_cijfer->first();
                if(!empty($gevonden_cijfer)){
                    $gevonden_cijfer->update(['cijfer' => $input_waarde]);
                } else {
                    if($vak_id != 'token'){
                        //var_dump($gevonden_cijfer. '$user_id:'.$user_id .'$vak_id:'. $vak_id);
                        $nieuwCijfer = new Cijfer;
                        $nieuwCijfer->module_id = $vak_id;
                        $nieuwCijfer->user_id = $user_id;
                        $nieuwCijfer->cijfer = $input_waarde;
                        $nieuwCijfer->save();

                    }
                }
            }
        }

        $studenten = User::All()->where('type','=','student');
        return view('adminPanel',[ 'modules' => Module::All(), 'studenten' => $studenten ,'message'=>$message]);

    }

    private function filterCijfers($parameter, $key,$value){
        return $parameter->where($key,'=',$value);

    }
}
