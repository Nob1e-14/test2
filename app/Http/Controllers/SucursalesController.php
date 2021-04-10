<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursales;
use App\Models\Empleados;
use App\Models\References;
use Session;

class SucursalesController extends Controller
{
    public function principal(){
      return view ('principal');
    }

    public function altasucursal(){

      $consulta = sucursales::orderBy('id_s','DESC')
        ->take(1)
        ->get();

        $cuantos = count($consulta);
        if($cuantos==0){
            $idsigue = 1;
        }
        else{
            $idsigue = $consulta[0]->id_s + 1;
        }

        $empleados = empleados::orderBy('nom_e')
        ->get();

        // return $idsigue;
        return view ('altasucursal')
        ->with('idsigue',$idsigue)
        ->with('empleados',$empleados);
      // return view ('altasucursal');
    }

    public function guardarsucursal(Request $request){


      $this->validate($request,[
        // 'ids' => 'required|regex:/^[P][P][R][-][0-9]{5}$/',
        'calle' => 'required',
        'numext' => 'required|regex:/^[0-9]+$/',
        'numint' => 'required|regex:/^[0-9]+$/',
        'colonia' => 'required',
        'municipio' => 'required',
        'estado' => 'required',
        'cp' => 'required|regex:/^[0-9]{5}$/',
        'tel' => 'required|regex:/^[0-9]{10}$/',
        'id_e' => 'required'
      ]);

      $sucursales = new sucursales;
      $sucursales->id_s = $request->id_s;
      $sucursales->calle = $request->calle;
      $sucursales->numext = $request->numext;
      $sucursales->numint = $request->numint;
      $sucursales->colonia = $request->colonia;
      $sucursales->municipio = $request->municipio;
      $sucursales->estado = $request->estado;
      $sucursales->cp = $request->cp;
      $sucursales->tel = $request->tel;
      $sucursales->id_e = $request->id_e;
      $sucursales->save();

      // return view('mensaje')
      // ->with('proceso', 'ALTA DE SUCURSAL')
      // ->with('mensaje',"La sucursal ha sido dada de alta correctamente")
      // ->with('error',1);

      Session::flash('mensaje',"La sucursal ha sido dada de alta correctamente");
        return redirect()->route('reportesucursales');

      // echo "SUCURSAL GUARDADA";
    }

    public function reportesucursales(){

        $consulta = sucursales::withTrashed()->join('empleados','sucursales.id_e','=','empleados.id_e')
        ->select('sucursales.id_s',
        'sucursales.calle',
        'sucursales.colonia',
        'empleados.nom_e as empl',
        'empleados.app as appempl',
        'sucursales.municipio',
        'sucursales.estado',
        'sucursales.tel',
        'sucursales.deleted_at')
        ->orderBy('sucursales.id_s')
        ->get();
        return view('reportesucursales')
        ->with('consulta', $consulta);
        // return $consulta;

    }

    public function desactivasucursal($id_s){

        $sucursales = sucursales::find($id_s);
        $sucursales->delete();
        // echo "Eliminado $ide";

        // return view('mensaje')
        // ->with('proceso', 'DESACTIVAR SUCURSALES')
        // ->with('mensaje',"La sucursal ha sido desactivada correctamente")
        // ->with('error',1);

        Session::flash('mensaje',"La sucursal ha sido desactivada correctamente");
        return redirect()->route('reportesucursales');

    }

    public function activarsucursal($id_s){

        $sucursales = sucursales::withTrashed()->where('id_s',$id_s)->restore();

        // return view('mensaje')
        // ->with('proceso', 'ACTIVAR SUCURSALES')
        // ->with('mensaje',"La sucursal ha sido activada correctamente")
        // ->with('error',1);


        Session::flash('mensaje',"La sucursal ha sido activada correctamente");
        return redirect()->route('reportesucursales');
    }

    public function borrasucursal($id_s){

        $buscasucursal = references::where('id_s',$id_s)->get();
        $cuantos = count($buscasucursal);
        if($cuantos==0){


            $sucursales=sucursales::withTrashed()->find($id_s)->forceDelete();

            // return view('mensaje')
            // ->with('proceso', 'BORRAR SUCURSALES')
            // ->with('mensaje',"La sucursal ha sido borrada correctamente")
            // ->with('error',1);

            Session::flash('mensaje',"La sucursal ha sido borrada correctamente");
            return redirect()->route('reportesucursales');
        }
        else{
            // return view('mensaje')
            // ->with('proceso', 'BORRAR SUCURSALES')
            // ->with('mensaje',"La sucursal no se puede eliminar porque tiene registros en references")
            // ->with('error',0);

            Session::flash('mensaje',"La sucursal no se puede eliminar porque tiene registros en references");
            return redirect()->route('reportesucursales');
        }
      }

        public function modificasucursal($id_s){
        $consulta = sucursales::withTrashed()->join('empleados','sucursales.id_e','=','empleados.id_e')
        ->select('sucursales.id_s',
        'sucursales.calle',
        'sucursales.numext',
        'sucursales.numint',
        'sucursales.colonia',
        'empleados.nom_e as nom_e',
        'empleados.app as app',
        'sucursales.municipio',
        'sucursales.estado',
        'sucursales.cp',
        'sucursales.tel',
        'sucursales.deleted_at')
        ->where('id_s',$id_s)
        ->get();

        $empleados = empleados::all();
        return view ('modificasucursal')
        ->with('consulta',$consulta[0])
        ->with('empleados',$empleados);
    }

    public function guardacambios(Request $request){

      $this->validate($request,[
          // 'id_s' => 'required|regex:/^[P][P][R][-][0-9]{5}$/',
        'calle' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/',
        'numext' => 'required|regex:/^[0-9]+$/',
        'numint' => 'required|regex:/^[0-9]+$/',
        'colonia' => 'required',
        'municipio' => 'required',
        'estado' => 'required',
        'cp' => 'required|regex:/^[0-9]{5}$/',
        'tel' => 'required|regex:/^[0-9]{10}$/',
        'id_e' => 'required'
      ]);


      $sucursales = sucursales::withTrashed()->find($request->id_s);
      $sucursales->id_s = $request->id_s;
      $sucursales->calle = $request->calle;
      $sucursales->numext = $request->numext;
      $sucursales->numint = $request->numint;
      $sucursales->colonia = $request->colonia;
      $sucursales->municipio = $request->municipio;
      $sucursales->estado = $request->estado;
      $sucursales->cp = $request->cp;
      $sucursales->tel = $request->tel;
      $sucursales->id_e = $request->id_e;
      $sucursales->save();

      // return view('mensaje')
      // ->with('proceso', 'MODIFICA DE SUCURSAL')
      // ->with('mensaje',"La sucursal ha sido modificada correctamente")
      // ->with('error',1);

      Session::flash('mensaje',"La sucursal ha sido modificada correctamente");
      return redirect()->route('reportesucursales');

    }

}
