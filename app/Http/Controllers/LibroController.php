<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['libro']=Libro::paginate(5);
        return view('libro.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosLibro=request()->except('_token');

        if($request->hasFile('imagenes')){
            $datosLibro['imagenes']=$request->file('imagenes')->store('uploads','public');
        }


        Libro::insert($datosLibro);
        //return response()->json($datosLibro);
        return redirect('libro')->with('mensaje' ,'libro registrado');  
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro=libro::findOrFail($id);
        return view('libro.edit' ,compact('libro'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $datosLibro = request()->except(['_token','_method']);
        Libro::where('id','=',$id)->update($datosLibro);
        $libro=Libro::findOrFail($id);
        return view('libro.edit',compact('libro'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        libro::destroy($id);
        //return redirect('libro');
        return redirect('libro')->with('mensaje','registro eliminado');
       
    }
}
