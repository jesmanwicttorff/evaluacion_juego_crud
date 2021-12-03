<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;



class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaJuegos['juegos'] = \DB::table('juegos')
        ->where('juegos.status','=',1)
        ->get();


        //$listaJuegos['juegos'] = Juego::paginate(5);
        return view('juego.index', $listaJuegos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juego.createJuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $datosJuegos = request()->except('_token'); // obtengo la informacion que viene por post exceputando el token
        if($request->hasFile('urlImagenJuego'))
        {
            $datosJuegos['urlImagenJuego'] = $request->file('urlImagenJuego')->store('uploads','public');
        }
        
        Juego::insert($datosJuegos);
        return redirect('juego')->with('mensaje','Juego Agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gameEdit = Juego::findOrFail($id); // buscamos el id del juego seleccionado
        return view('juego.editarJuego', compact('gameEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request , $id)
    {
        // obtengo la informacion que viene por post exceputando el token y metodo que viene por PATCH
        $datosJuegos = request()->except(['_token','_method']); 
        if($request->hasFile('urlImagenJuego')) // si existe la imagen entra aqui
        {
            $gameData = Juego::findOrFail($id);
            Storage::delete(['public/'.$gameData->urlJuego]);// elimino la foto
            $datosJuegos['urlImagenJuego'] = $request->file('urlImagenJuego')->store('uploads','public');
        }

       
        Juego::where('juegos.id','=',$id)
        ->update($datosJuegos);

        $gameEdit = Juego::findOrFail($id); // buscamos el id del juego seleccionado
        return view('juego.editarJuego', compact('gameEdit'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*  $game = Juego::findOrFail($id);
        if(Storage::delete('public/'.$game->urlImagenJuego))
            {
                Juego::destroy($id);
            }  

        */

        $listaJuegos['juegos'] = \DB::table('juegos')
        ->where('juegos.id','=',$id)
        ->update(['juegos.status'=> 0]);
        
        return redirect('juego')->with('mensaje','Juego Eliminado exitosamente');

    }
}
