<?php

namespace App\Http\Controllers;
use App\Models\tipodistribucion;

use Illuminate\Http\Request;

class DistribucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tipodistribucion::all();
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
        $respuesta=tipodistribucion::create($inputs);
        return response()->json([
            'datos'=>$respuesta,
            'mensaje'=>'Distribución creada de manera correcta',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $existe=tipodistribucion::find($id);

        if( isset($existe)){
            return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Distribución encontrada de manera correcta',
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la distribución',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existe=tipodistribucion::find($id);
        if( isset($existe)){
            $existe->Descripcion=$request->Descripcion;
            
            if( $existe->save()){
                return response()->json([
                    'datos'=>$existe,
                    'mensaje'=>'Distribución actualizada de manera correcta',
                ]);
            }
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la distribución',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existe=tipodistribucion::find($id);

        if( isset($existe)){
           $res= tipodistribucion::destroy($id);
           if($res){
             return response()->json([
                'datos'=>$existe,
                'mensaje'=>'Distribución eliminada de manera correcta',
            ]);
           }   else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la distribución',
            ]);
        }        
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'no existe la distribución',
            ]);
        }
    }
}
