<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Pasteles;

use App\Models\Tipo;


use Validator;
use Redirect;
use Session;

class CakeController extends Controller
{
    //

	public function modificar(Request $req){
		$id_p = $req['id_p'];
		$val = Validator::make($req->all(),[
			'id_p' => 'required|numeric|exists:Pasteles|between:1,9999999999',
		]);
		if($val->fails())
			return Redirect::back()->withErrors($val)->withInput();
		else{
			$tips = Tipo::all();
			$modpas = Pasteles::find($id_p);
      $res = $modpas['fotoptoducto'];
      //dd($modpas);
			return view("modpastel",['modpas'=>$modpas],['tips'=>$tips]);
			}
		}

    

		public function modificar2(Request $req){
			$file = $req->file('avatar');
			$imagen = $req['avatar_old'];
      //dd($file, $imagen);
			if($file==null){
				$Imagen2 = $imagen;
			}else{
				
				if($file<>""){
					$Imagen = $file->getClientOriginalName();
					$Imagen2 = $req->id_v . $Imagen;
					\Storage::disk('public')->put($Imagen2, \File::get($file));
				}else{
					$Imagen2 = "sayayin.jpg";
				}
			}
      $id_p = $req['id_p'];
      $nom_p = $req['nom_p'];
      $id_t = $req['id_t'];
      $desc_p = $req['desc_p'];
      $carac_p = $req['carac_p'];
      $extras = $req['extras'];
      $tam_p = $req['tam_p'];
      $tiempprep = $req['tiempprep'];
      $precio = $req['precio'];
      $val = Validator::make($req->all(),[
        #'id' => 'required|numeric|unique:Paqueteriases|between:1,9999999999',
        'nom_p' => 'required|string',
        'id_t' => 'required|numeric|between:0,9999999999',
        'desc_p' => 'required|string',
        #'carac_p' => 'string',
        #'extras' => 'string',
        'tam_p' => 'required|numeric',
        'tiempprep' => 'required|numeric',
        'precio' => 'required|numeric',
          ]);
      if($val->fails())
        return Redirect::back()->withErrors($val)->withInput();
      else{
        $cks = Pasteles::find($id_p);
        $cks -> nom_p = $nom_p;
        $cks -> fotoproducto = $Imagen2;
        $cks -> id_t = $id_t;
        $cks -> desc_p = $desc_p;
        $cks -> carac_p = $carac_p;
        $cks -> extras = $extras;
        $cks -> tam_p = $tam_p;
        $cks -> tiempprep = $tiempprep;
        $cks -> precio = $precio;
        $cks -> save();
        Session::flash('mensaje',"Registro Exitoso!");
        return redirect()->back()->with('status', 'Registro Exitoso!');
        }
        //echo "<h2>Registro Modificado</h2>";}
      }
  

	public function eliminar(Request $req){
		$id_p = $req['id_p'];
		$val = Validator::make($req->all(),[
			'id_p' => 'required|numeric|exists:Pasteles|between:1,9999999999',
		]);
		if($val->fails())
			return Redirect::back()->withErrors($val)->withInput();
		else{
			$delt = Pasteles::where('id_p', $id_p)->delete();
      Session::flash('mensaje',"Registro Eliminado!");
			return redirect()->back()->with('status', 'Registro Eliminado!');			
			}
		}
    
    public function alta(Request $req){
      $consulta = Pasteles::orderBy('id_p')
		  ->take(1)->get();
		  $cuantos = count($consulta);
		  if($cuantos==0)
		  {
			  $id_p_sig = 1;
		  }
		  else{
			  $id_p_sig = $consulta[0]->id_p + 1;
		  }
			$tips = Tipo::all();
		  return view("registropastel",['tips'=>$tips])->with('id_p_sig',$id_p_sig);
    }
    
    public function tabla(Request $req){
			$cks =\DB::select("SELECT pasteles.id_p, pasteles.nom_p, pasteles.fotoproducto, tipos.nom_t, pasteles.desc_p, pasteles.status_p, pasteles.carac_p, pasteles.extras, pasteles.tam_p, pasteles.tiempprep, pasteles.precio FROM pasteles, tipos WHERE pasteles.id_t=tipos.id_t;");
		  return view("tablapastel",['cks'=>$cks]);  
    }
    
    public function guardar(Request $req){
      
		$file = $req->file('fotoproducto');
		if($file<>""){
		$Imagen = $file->getClientOriginalName();
		$Imagen2 = $req->id_v . $Imagen;
		\Storage::disk('public')->put($Imagen2, \File::get($file));
		}
		else{
			$Imagen2 = "sayayin.jpg";
		}

      #$id = $req['id'];
      $nom_p = $req['nom_p'];
      $id_t = $req['id_t'];
      $desc_p = $req['desc_p'];
      $carac_p = $req['carac_p'];
      $extras = $req['extras'];
      $tam_p = $req['tam_p'];
      $tiempprep = $req['tiempprep'];
      $precio = $req['precio'];
      $val = Validator::make($req->all(),[
        #'id' => 'required|numeric|unique:Paqueteriases|between:1,9999999999',
        'nom_p' => 'required|string',
        'id_t' => 'required|numeric|between:0,9999999999',
        'desc_p' => 'required|string',
        #'carac_p' => 'string',
        #'extras' => 'string',
        'tam_p' => 'required|numeric',
        'tiempprep' => 'required|numeric',
        'precio' => 'required|numeric',
          ]);
      if($val->fails())
        return Redirect::back()->withErrors($val)->withInput();
      else{
        $cks=new Pasteles();
        $cks -> nom_p = $nom_p;
        $cks -> fotoproducto = $Imagen2;
        $cks -> id_t = $id_t;
        $cks -> desc_p = $desc_p;
        $cks -> carac_p = $carac_p;
        $cks -> extras = $extras;
        $cks -> tam_p = $tam_p;
        $cks -> tiempprep = $tiempprep;
        $cks -> precio = $precio;
        $cks -> status_p = 1;
        $cks -> save();
        Session::flash('mensaje',"Registro Exitoso!");
        return redirect()->back()->with('status', 'Registro Exitoso!');
      }
    }
      public function descake($id_p)
      {
      $status_p=0;
          $vend = Pasteles::find($id_p);
      $vend -> status_p = $status_p;
          $vend->save();
          Session::flash('mensaje',"El estado  ha sido desactivado de manera correcta");
          return redirect()->route('tabcake');
      }
  
      public function actcake($id_p)
      {
      
      $status_p=1;
          $vend = Pasteles::find($id_p);
      $vend -> status_p = $status_p;
          $vend->save();
          Session::flash('mensaje',"El estado  ha sido activado de manera correcta");
          return redirect()->route('tabcake');
      }
  }