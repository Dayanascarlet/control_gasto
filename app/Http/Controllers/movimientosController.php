<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos;
use App\User;
use App\movimientos;
use Auth;

class movimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos=movimientos::all();
        return view('movimientos.index')
        ->with('movimientos',$movimientos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimientos=movimientos::all();
        $tipos=tipos::all();
        $user=User::all();
        return view('movimientos.create')
        ->With('tipos',$tipos)
        ->With('User',$user);

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
        $data=$request->all();
        
        $data['usu_id']=Auth::user()->usu_id;
        movimientos::create($data);
        return redirect(route('movimientos'));   

 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $movimientos=movimientos::find($id);
        return view('movimientos.edit')
        ->with('permisos',$permisos);
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

        $mov=movimientos::find($id);
        $mov->update(route('movimientos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        movimientos::destroy($id);
        return redirect(route('movimientos'));
    }
}
