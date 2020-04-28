@extends('layouts.app')

@section('content')
    <pagina-component tamanho="12">
        <painel-Component titulo="Dashboard">

            <link-navegacao-component v-bind:link="{{$linkNavegacao}}"></link-navegacao-component>

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
                <div class="col-md-4">
                    <caixa-component qtd="5" titulo="ian" url="#" cor="gray" icone="ion-person"></caixa-component>
                </div>
            </div>
        </painel-Component>
    </pagina-component>
@endsection

