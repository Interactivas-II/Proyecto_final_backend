<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Event;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evento = Event::all();

        return view('index', compact('evento'));
        //return $evento = DB::select('select * from evento where id_evento=?');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     *    DB::insert('insert into evento(imagen, titulo, lugar_evento, fecha_hora, categoria, descripcion,
     *    tipo_pago, restriccion_evento, precio_adultos, precio_ninios) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
     *    [$valor1, $valor2]);
     * 
     * 
     */
    public function create()
    {

        //DB::select('select * from evento where id_evento=?', [$id]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$evento = \DB::table('evento')
        //->select('evento.*')
        //->orderBy('id','DESC')
        //->get();
        //return view('events')->with('evento',$evento);
        //return DB::select('select * from evento');
        //return DB::select('select * from evento where id_evento=?', [$id]);
        //return 'texto'.$id;
        //return  view("custom",['id'=> $id]);
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
        //
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
    }
}
