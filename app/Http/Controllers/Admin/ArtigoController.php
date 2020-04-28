<?php

namespace App\Http\Controllers\Admin;

use App\Artigo;
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

        $listaArtigos = json_encode(Artigo::select('id','titulo','descricao','data')->get());

        
        return view('admin.artigo.index',compact('linkNavegacao','listaArtigos'));
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
       $artigo = Artigo::create($request->all());

       return redirect()->back();
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
