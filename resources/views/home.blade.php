@extends('layouts.app')

@section('content')
    <pagina-component tamanho="10">
        <painel-Component titulo="Dashboard">

            <div class="row">
                <div class="col-md-4">
                <caixa-component qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="blue" icone="ion ion-pie-graph"></caixa-component>
                </div>
                <div class="col-md-4">
                    <caixa-component qtd="1500" titulo="Usuário" url="#" cor="orange" icone="ion-person-stalker"></caixa-component>
                </div>
                <div class="col-md-4">
                    <caixa-component qtd="3" titulo="Autores" url="#" cor="green" icone="ion-person"></caixa-component>
                </div>
            </div>
        </painel-Component>
    </pagina-component>
@endsection