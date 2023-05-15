<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->input();
        $respuesta=usuario::create($inputs);
        return response()->json([
            'datos'=>$respuesta,
            'mensaje'=>'usuario creado de manera correcta',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        $existe=usuario::find($id);

        if( isset($existe)){
            return response()->json([
                'datos'=>$existe,
                'mensaje'=>'usuario encontrado de manera correcta',
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el usuario',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $existe=usuario::find($id);
        if( isset($existe)){
            $existe->Descripcion=$request->Descripcion;
            
            if( $existe->save()){
                return response()->json([
                    'datos'=>$existe,
                    'mensaje'=>'Usuario actualizado de manera correcta',
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el usuario',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        $existe=usuario::find($id);

        if( isset($existe)){
           $res= usuario::destroy($id);
           if($res){
             return response()->json([
                'datos'=>$existe,
                'mensaje'=>'usuario eliminado de manera correcta',
            ]);
           }   else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el usuario',
            ]);
        }        
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el usuario',
            ]);
        }
    }
}
