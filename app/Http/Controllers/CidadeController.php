<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller{
    public $cidade = [
        ['id' => 1,
         'nome'=>"Paranaguá",
         'porte'=> "Médio"]
    ];

    public function __construct() {
        $aux = session('cidade');
        if(!isset($aux)) {
            session(['cidade' => $this->cidade]);
        }
    }
    public function index(){
        $cidade = session('cidade');
        return view('cidade.index',compact('cidade'));
    }

    public function create(){
        return view('cidade.create');
    }

    public function store(Request $request){
        $cach = session('cidade');
        $ids = array_column($cach,'id');

        if(!count($ids)==0){
            $new_id = max($ids)+1;
        }else{
            $new_id = 1;
        }

        $novaCidade = [
            'id'=>$new_id,
            'nome'=>$request->nome,
            'porte'=>$request->porte
        ];

        array_push($cach,$novaCidade);
        session(['cidade'=>$cach]);

        return redirect()->route('cidade.index');
    }

    public function show($id){
        $aux = session('cidade');
        $indice = array_search($id, array_column($aux, 'id'));
        $dados = $aux[$indice];

        return view('cidade.show', compact('dados'));

    }

    public function edit($id){
        $aux = session('cidade');
        $indice = array_search($id, array_column($aux, 'id'));
        $dados = $aux[$indice];

        return view('cidade.edit', compact('dados'));
        
    }

    public function update(Request $request, $id){
        $alterado = [
            'id' => $id,
            'nome' => $request->nome,
            'porte' => $request->porte
        ];

        $aux = session('cidade');
        $indice = array_search($id, array_column($aux, 'id'));

        $aux[$indice] = $alterado;
        session(['cidade' => $aux]);

        return redirect()->route('cidade.index');
        
    }

    public function destroy($id){
        $aux = session('cidade');
        $indice = array_search($id, array_column($aux, 'id'));

        unset($aux[$indice]);
        session(['cidade' => $aux]);

        return redirect()->route('cidade.index');
        
    }
}
