<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App;


class PagesController extends Controller
{
    
    public function inicio(){
        $notas = App\Nota::all();
        return view('index', compact('notas'));

    }

    public function  fotos(){
        return view('fotos');
    }

    public function blog(){
        return view('blog');
    }
    
    public function detalle($id){
        $nota = App\Nota::FindOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function crearnota(Request $request){
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion'=> 'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota Agregada!');

    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function buscar(request $request){

        $search = $request->get('search');
        // $search = 'Margareth';
        $notas = DB::table('notas')
                        ->where('nombre', 'like', '%'.$search.'%')
                        ->get();
        return view('notas.buscar', compact('notas'));
        }






    public function update(Request $request, $id){

        $notaUpdate = App\Nota::FindOrFail($id);
        $notaUpdate->nombre = $request->nombre; 
        $notaUpdate->descripcion = $request->descripcion; 

        $notaUpdate->save();

        return back()->with('mensaje', 'Nota Actualizada');

    }

    public function eliminar($id){
        $notaEliminar = App\Nota::FindOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje', 'Nota Eliminada');

    }


    public function nosotros($nombre = null){
        $equipo = ['Margareth', 'Juanito', 'Ranchito'];

    //return view('nosotros',['equipo'=>$equipo, 'nombre'=>$nombre]);
    return view('nosotros',compact('equipo', 'nombre'));
    }

}
