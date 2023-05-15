<?php

namespace App\Http\Controllers;

use App\Models\tipousuario;
use Illuminate\Http\Request;

class tipousuarioContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tipousuario::all();
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
        $respuesta=tipousuario::create($inputs);
        return response()->json([
            'datos'=>$respuesta,
            'mensaje'=>'tipo de usuario creado de manera correcta',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipousuario  $tipousuario
     * @return \Illuminate\Http\Response
     */
    public function show(tipousuario $tipousuario)
    {
        $existe=tipousuario::find($id);

        if( isset($existe)){
            return response()->json([
                'datos'=>$existe,
                'mensaje'=>'tipo de usuario encontrado de manera correcta',
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el tipo de usuario',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipousuario  $tipousuario
     * @return \Illuminate\Http\Response
     */
    public function edit(tipousuario $tipousuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipousuario  $tipousuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipousuario $tipousuario)
    {
        $existe=tipousuario::find($id);
        if( isset($existe)){
            $existe->Descripcion=$request->Descripcion;
            
            if( $existe->save()){
                return response()->json([
                    'datos'=>$existe,
                    'mensaje'=>'Tipo de usuario actualizado de manera correcta',
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el tipo de usuario',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipousuario  $tipousuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipousuario $tipousuario)
    {
        $existe=tipousuario::find($id);

        if( isset($existe)){
           $res= tipousuario::destroy($id);
           if($res){
             return response()->json([
                'datos'=>$existe,
                'mensaje'=>'tipo de usuario eliminado de manera correcta',
            ]);
           }   else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el tipo de usuario',
            ]);
        }        
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe el tipo de usuario',
            ]);
        }
    }
}
