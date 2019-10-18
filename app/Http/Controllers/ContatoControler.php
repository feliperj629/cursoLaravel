<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoControler extends Controller
{
    public function index()
    {
    	$contatos = [
    		(object)["nome"=>"Maria", "tel"=>"123456"],
    		(object)["nome"=>"Pedro", "tel"=>"654321"]
    	];

    	$contato = new Contato();
    	$conn = $contato->lista();

    	dd($conn->nome);


    	return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req)
    {
    	dd($req->all());
    	return "Esse é o Criar do ContatoControler";
    }
    public function editar()
    {
    	return "Esse é o Editar do ContatoControler";
    }
}
