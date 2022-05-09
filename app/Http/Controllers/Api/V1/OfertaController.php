<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \DateTime;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Oferta::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'precio'=>'required',
            'descripcion'=>'required',
            'fecha_ini'=>'required|date_format:d-m-Y',
            'fecha_fin'=>'required|date_format:d-m-Y',
            'producto_id'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422); 
        }
        
        
        $oferta=new Oferta();
        $oferta->precio=$request->precio;
        $oferta->descripcion=$request->descripcion;
        $oferta->fecha_ini=DateTime::createFromFormat('d-m-Y',$request->fecha_ini)->format('d-m-y');
        $oferta->fecha_fin=DateTime::createFromFormat('d-m-Y',$request->fecha_fin)->format('d-m-y');
        $oferta->producto_id=$request->producto_id;
        $oferta->save();
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Oferta::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'precio'=>'required',
            'fecha_ini'=>'required|date_format:d/m/Y',
            'fecha_fin'=>'required|date_format:d/m/Y',
            'product_id'=>'required'
        ]);

        Oferta::findOrFail($id)->update($request->all());
        return Oferta::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Oferta::destroy($id);
        return "Oferta $id eliminada.";
    }
}
