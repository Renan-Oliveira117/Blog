<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtigoController extends Controller
{
    
    public function index()
    {   
        $linkNavegacao = json_encode([
            ["titulo"=>"Home","url"=>route('home')],
            ["titulo"=>"Lista de Artigos","url"=>""]
        ]);

        $listaArtigos = json_encode([
            ["id"=>1,"titulo"=>"Java","descricao"=>"curso de java"], 
            ["id"=>2,"titulo"=>"PHP","descricao"=>"curso de PHP OO"],
            ["id"=>3,"titulo"=>"Vue.js","descricao"=>"curso Vue.js"]
        ]);

        
        return view('admin.artigo.index',compact('linkNavegacao','listaArtigos'));
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
