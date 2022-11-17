<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permiso::paginate(15);
        return response()->json($permisos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "detalle" => "required|max:30|unique:permisos",
            "action"  => "required|max:30",
            "subject" => "required|max:30"
        ]);

        $permiso = new Permiso;
        $permiso->detalle = $request->detalle;
        $permiso->action = $request->action;
        $permiso->subject = $request->subject;
        $permiso->save();

        return response()->json([
            "status" => true,
            "message" => "Permiso Registrado"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permiso = Permiso::findOrFail($id);
        return response()->json($permiso, 200);
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
        $request->validate([
            "detalle" => "required|max:30|unique:permisos,detalle,$id",
            "action"  => "required|max:30",
            "subject" => "required|max:30"
        ]);

        $permiso = Permiso::findOrFail($id);
        $permiso->detalle = $request->detalle;
        $permiso->action = $request->action;
        $permiso->subject = $request->subject;
        $permiso->update();

        return response()->json([
            "status" => true,
            "message" => "Permiso Actualizado"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permiso::findOrFail($id);
        $permiso->delete();

        return response()->json([
            "status" => true,
            "message" => "Permiso Eliminado"
        ], 200);
    }
}
