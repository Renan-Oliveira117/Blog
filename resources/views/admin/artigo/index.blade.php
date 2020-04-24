@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-Component titulo="Lista de Artigos">

            <tabela-lista-component 

            v-bind:titulos="['ID','Titulo','Descrição','Autor']"
            v-bind:itens="[[1,'PHP','curso de PHP', 'Maria'],[2,'Laravel','curso de Laravel', 'renan']]"
            criar="#criar" editar="#editar" deletar="#deletar" token="15456465" detalhe="#detalhe"
            ordem = "desc" ordemCol="1"
            
            ></tabela-lista-component>

        </painel-Component>
    </pagina-component>
@endsection