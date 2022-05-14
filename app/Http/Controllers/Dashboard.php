<?php

namespace App\Http\Controllers;

use App\Models\CategoriasModel;
use App\Models\ImoveisModel;
use App\Models\TiposModel;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $locacao = ImoveisModel::all()->where('categoria','Locação');
        $venda = ImoveisModel::all()->where('categoria','Venda');
        $casa = ImoveisModel::all()->where('tipo','Casa');
        $apartamento = ImoveisModel::all()->where('tipo', 'Apartamento');
        $condominio = ImoveisModel::all()->where('tipo','Condomínio');
        $loja = ImoveisModel::all()->where('tipo','Loja');
        $terreno = ImoveisModel::all()->where('tipo','Terreno');
//dd( $locacao,  $venda, $casa, $apartamento, $condominio, $loja, $terreno);

        echo view('administracao.template.header');
        echo view('administracao.dashboard.index', compact('locacao', 'venda','casa','apartamento','condominio','loja','terreno'));
        echo view('administracao.template.footer');
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
        //
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
