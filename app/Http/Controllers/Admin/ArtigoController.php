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

        $listaArtigos = Artigo::select('id','titulo','descricao','data')->paginate(2);

        
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
        return Artigo::find($id);
    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        $artigo = Artigo::find($id);
        $artigo->update($request->all());

       return redirect()->back();
    }

    public function destroy($id)
    { 
        Artigo::find($id)->delete();
            return redirect()->back();
    }
}
