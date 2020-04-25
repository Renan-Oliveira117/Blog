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

        
        return view('admin.artigo.index',compact('linkNavegacao'));
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
