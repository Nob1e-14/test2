<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

use Validator;
use Redirect;
Use Exception;
Use Session;

class TypeController extends Controller
{
	public function modificar(Request $req){
		$id_t = $req['id_t'];
		$val = Validator::make($req->all(),[
			'id_t' => 'required|numeric|exists:Tipos|between:1,9999999999',
		]);
		if($val->fails())
			return Redirect::back()->withErrors($val)->withInput();
		else{
			$tips = Tipo::find($id_t);
			return view("modtipo",['tips'=>$tips]);
			}
		}
	  public function modificar2(Request $req){
      $id_t = $req['id_t'];
      $nom_t = $req['nom_t'];
      $dec_t = $req['dec_t'];
      $carac_t = $req['carac_t'];
      $val = Validator::make($req->all(),[
        'nom_t' => 'required|string',
        'dec_t' => 'required|string',
        'carac_t' => 'required|string',
          ]);
      if($val->fails())
        return Redirect::back()->withErrors($val)->withInput();
      else{
        $tip = Tipo::find($id_t);
        $tip -> nom_t = $nom_t;
        $tip -> dec_t = $dec_t;
        $tip -> carac_t = $carac_t;
        $tip -> save();
        Session::flash('mensaje',"Registro Exitoso!");
        return redirect()->back()->with('status', 'Registro Exitoso!');
      }
    }
	public function eliminar(Request $req){
		$id_t = $req['id_t'];
		$val = Validator::make($req->all(),[
			'id_t' => 'required|numeric|exists:Tipos|between:1,9999999999',
		]);
		if($val->fails())
			return Redirect::back()->withErrors($val)->withInput();
		else{
			$delt = Tipo::find($id_t);
      try{
        $delt -> delete();
      } catch(Exception $exception) {
        Session::flash('error',"Imposible eliminar, existe al menos un registro de PASTEL anidado a este TIPO!");
        return redirect()->back()->with('error',"Imposible eliminar, existe al menos un registro de PASTEL anidado a este TIPO!");	
      }	
      Session::flash('mensaje',"Registro Eliminado!");
			return redirect()->back()->with('status', 'Registro Eliminado!');			
			}
		}
    public function tabla(Request $req){
		  $tips = Tipo::all();
		  return view("tablatipo",['tips'=>$tips]);    
    }
    public function guardar(Request $req){
      $nom_t = $req['nom_t'];
      $dec_t = $req['dec_t'];
      $carac_t = $req['carac_t'];
      $val = Validator::make($req->all(),[
        'nom_t' => 'required|string',
        'dec_t' => 'required|string',
        'carac_t' => 'required|string',
          ]);
      if($val->fails())
        return Redirect::back()->withErrors($val)->withInput();
      else{
        $vend=new Tipo();
        $vend -> nom_t = $nom_t;
        $vend -> dec_t = $dec_t;
        $vend -> carac_t = $carac_t;
        $vend -> status_t = 1;
        $vend -> save();
        Session::flash('mensaje',"Registro Exitoso!");
        return redirect()->back()->with('status', 'Registro Exitoso!');
      }
    }
    public function destype($id_t)
    {
		$status_t=0;
        $vend = Tipo::find($id_t);
		$vend -> status_t = $status_t;
        $vend->save();
        Session::flash('mensaje',"El estado  ha sido desactivado de manera correcta");
        return redirect()->route('tabtype');
    }
    public function actype($id_t)
    {
		$status_t=1;
        $vend = Tipo::find($id_t);
		$vend -> status_t = $status_t;
        $vend->save();
        Session::flash('mensaje',"El estado  ha sido activado de manera correcta");
        return redirect()->route('tabtype');
    }
}