@extends('layouts.app')

@section('content')
    <!-- Component que altera o tamanho do painel -->
    <pagina-component tamanho="12"> 
         <!-- Component que define titulo para o painel -->
        <painel-Component titulo="Lista de Artigos">
            <!-- Component de menu de navegação entre as telas painel -->
            <link-navegacao-component v-bind:link="{{$linkNavegacao}}"></link-navegacao-component> 

            <!-- Component para criação da tabela e seus elemento 
            v-bind:titulos -> Vai ser adcionado os titulo para tabela
            v-bind:itens -> vai listar toda lista salva
            ordem = "desc" ordemCol="1" -> para ordenar a tabela 
            criar="#criar" editar="#editar" deletar="#deletar" token="15456465" detalhe="#detalhe" -> criação dos botoes de manipulação dos dados
             modal = "sim" -> para confirma a existecia de modal na tabela 
             obs: css equivale a classe
            
            -->  
            <tabela-lista-component  

                v-bind:titulos="['ID','Titulo','Descrição']"  
                v-bind:itens= "{{$listaArtigos }}"
                ordem = "desc" ordemCol="1"
                criar="#criar" editar="#editar" deletar="#deletar" token="15456465" detalhe="#detalhe"
                modal="sim"         
                    
              ></tabela-lista-component>
          </painel-Component>
    </pagina-component>
    
          <!-- Modal para adcionar artigo -->
    <modal-component nome="add" titulo="Adicionar">
      <formulario-component id="formAdicionar" classe="" action="#" method="put" enctype="multipart/form-data" token="12345">    
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
        </div>
      </formulario-component> 
       <span slot="botoes">
        <button form="formAdicionar" class="btn btn-info">Adicionar</button>
      </span>     
    </modal-component>

    <!-- Modal para Editar artigo -->
    <modal-component nome="editar" titulo="Editar artigo">
      <formulario-component id="formAtualizar" classe="" action="#" method="put" enctype="multipart/form-data" token="12345">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao"  placeholder="Descrição">
        </div>
      </formulario-component>
      <span slot="botoes">
        <button form="formAtualizar" class="btn btn-info">Atualizar</button>
      </span>
    </modal-component>
  <!-- Modal para detalhar artigo -->
  <modal-component nome="detalhe" v-bind:titulo="$store.state.item.titulo">   
    <p>@{{$store.state.item.descricao}}</p>
  </modal-component>
@endsection