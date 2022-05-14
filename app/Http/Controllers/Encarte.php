<?php

namespace App\Http\Controllers;

use App\Models\CategoriasModel;
use App\Models\ImoveisModel;
use App\Models\TiposModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class Encarte extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = ImoveisModel::paginate(10);
        echo view('administracao.template.header');
        echo view('administracao.encarte.index', compact('imoveis'));
        echo view('administracao.template.footer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriasModel::all();
        $tipos = TiposModel::all();
        echo view('administracao.template.header');
        echo view('administracao.encarte.new', compact('tipos', 'categorias'));
        echo view('administracao.template.footer');
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

            'descricao' => 'required',
            'categoria' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'imagem_principal' => 'required',
            'preco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'tamanho' => 'required',
            'quartos' => 'required',
            'banheiros' => 'required',
            'vagas' => 'required',
        ]);

        $imoveis = new ImoveisModel;
        $imoveis->descricao = $request->post('descricao');
        $imoveis->categoria = $request->post('categoria');
        $imoveis->codigo = $request->post('codigo');
        $imoveis->tipo = $request->post('tipo');
        $imoveis->preco = $request->post('preco');
        $imoveis->bairro = $request->post('bairro');
        $imoveis->cidade = $request->post('cidade');
        $imoveis->estado = $request->post('estado');
        $imoveis->tamanho = $request->post('tamanho');
        $imoveis->quartos = $request->post('quartos');
        $imoveis->banheiros = $request->post('banheiros');
        $imoveis->vagas = $request->post('vagas');


        if (($request->file('imagem_principal')) !== null) {
            $file = $request->file('imagem_principal');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_principal'] = $filename;
        }
        if (($request->file('imagem_1')) !== null) {
            $file = $request->file('imagem_1');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_1'] = $filename;
        }
        if (($request->file('imagem_2')) !== null) {
            $file = $request->file('imagem_2');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_2'] = $filename;
        }
        if (($request->file('imagem_3')) !== null) {
            $file = $request->file('imagem_3');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_3'] = $filename;
        }
        if (($request->file('imagem_4')) !== null) {
            $file = $request->file('imagem_4');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_4'] = $filename;
        }
        if (($request->file('imagem_5')) !== null) {
            $file = $request->file('imagem_5');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_5'] = $filename;
        }
        if (($request->file('imagem_6')) !== null) {
            $file = $request->file('imagem_6');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_6'] = $filename;
        }



        $imoveis->save();
        dd($imoveis);
        return redirect('encarte')->with('create', 'O Imóvel foi Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imoveis = ImoveisModel::find($id);
        $categorias = CategoriasModel::all();
        $tipos = TiposModel::all();
        echo view('administracao.template.header');
        echo view('administracao.encarte.show', compact('imoveis', 'categorias', 'tipos'));
        echo view('administracao.template.footer');
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



        $imoveis = ImoveisModel::find($id);
        $imoveis->descricao = $request->get('descricao');
        $imoveis->categoria = $request->get('categoria');
        $imoveis->codigo = $request->get('codigo');
        $imoveis->tipo = $request->get('tipo');
        $imoveis->preco = $request->get('preco');
        $imoveis->bairro = $request->get('bairro');
        $imoveis->cidade = $request->get('cidade');
        $imoveis->estado = $request->get('estado');
        $imoveis->tamanho = $request->get('tamanho');
        $imoveis->quartos = $request->get('quartos');
        $imoveis->banheiros = $request->get('banheiros');
        $imoveis->vagas = $request->get('vagas');


        if (($request->file('imagem_principal')) !== null) {
            $file = $request->file('imagem_principal');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_principal'] = $filename;
        }
        if (($request->file('imagem_1')) !== null) {
            $file = $request->file('imagem_1');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_1'] = $filename;
        }
        if (($request->file('imagem_2')) !== null) {
            $file = $request->file('imagem_2');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_2'] = $filename;
        }
        if (($request->file('imagem_3')) !== null) {
            $file = $request->file('imagem_3');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_3'] = $filename;
        }
        if (($request->file('imagem_4')) !== null) {
            $file = $request->file('imagem_4');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_4'] = $filename;
        }
        if (($request->file('imagem_5')) !== null) {
            $file = $request->file('imagem_5');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_5'] = $filename;
        }
        if (($request->file('imagem_6')) !== null) {
            $file = $request->file('imagem_6');
            $filename =  $file->getClientOriginalName();
            $file->move(public_path('img/imoveis'), $filename);
            $imoveis['imagem_6'] = $filename;
        }


        $imoveis->update();
        return redirect('encarte')->with('update', 'O Imóvel foi Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(imoveis $imoveis, $id)
    {
        $imoveis = ImoveisModel::find($id);
        $imoveis->destroy($id);
        return redirect('encarte')->with('delete', 'O Imóvel foi Excluído com Sucesso');
    }
}
