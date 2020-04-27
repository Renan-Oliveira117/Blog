<template>
  <div>
    <div class="form-inline">

      <a v-if="criar && !modal" v-bind:href="criar">Criar</a>
      <modal-link-component v-if="criar && modal" tipo="button" nome="add" titulo="Criar" css=""></modal-link-component>
    </div>

    <div class="form-group pull-right"> <!--pull-right deixar o elemento na direita -->
        <input type="search" class="form-control" placeholder="Buscar" v-model="buscar" >  
    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo,index) in titulos" :key="index">{{titulo}}</th>
          <th v-if="detalhe || editar || deletar"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item,index) in lista" :key="index">

            <td v-for="(i,index) in item" :key="index">{{i}}</td>
            
            <td v-if="detalhe || editar || deletar">
                <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" v-bind:value="token">

                    <a v-if="detalhe && !modal" v-bind:href="detalhe"> Detalhe |</a> 
                    <modal-link-component v-if="detalhe && modal" v-bind:item="item" tipo="link" nome="detalhe" titulo="Detalhe |" css=""></modal-link-component>

                    <a v-if="editar && !modal" v-bind:href="editar">Editar |</a>
                    <modal-link-component v-if="editar && modal" v-bind:item="item" tipo="link" nome="editar" titulo="Editar |" css=""></modal-link-component>
                  
                    <a href="#" v-on:click="executarForm(index)">Deletar</a>

                </form>
                    <span v-if="!token">
                    <a v-if="detalhe && !modal" v-bind:href="detalhe">Detalhe |</a> 
                    <modal-link-component v-if="detalhe && modal" tipo="link" nome="Detalhe" titulo="detalhe |" css=""></modal-link-component>

                    <a v-if="editar && !modal" v-bind:href="editar">Editar |</a>
                    <modal-link-component v-if="editar && modal" tipo="link" nome="editar" titulo="Editar |" css=""></modal-link-component>
                    <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                    </span>

                    <span v-if="token && !deletar">
                    <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                    <a v-if="editar && !modal" v-bind:href="editar">Editar |</a>
                    <modal-link-component v-if="editar && modal" tipo="link" nome="editar" titulo="Editar |" css=""></modal-link-component>
                    </span>
            </td>
        </tr>       

      </tbody>

    </table>

  </div>

</template>

<script>
    export default {
      props:['titulos','itens','ordem','ordemcol','criar','detalhe','editar','deletar','token','modal'],
      data: function(){
        return{
          buscar:'',
          ordemAux: this.ordem || "asc",
          ordemAuxCol: this.ordemcol || 0
        } 
      },
      methods:{
          executarForm:function(index){
              document.getElementById(index).submit();
          },
          ordenaColuna: function(coluna){
            this.ordemAuxCol = coluna ;
            if(this.ordemAux.toLowerCase() == "asc"){
              this.ordemAux = "desc";
            }else{
              this.ordemAux = "asc";
            }
          }
      }, 
      computed:{
        /** ordenar valores na decrescente e crescente */
        lista:function(){       

          let ordem =  this.ordemAux;
          let ordemcol =  this.ordemAuxCol;
          ordem = ordem.toLowerCase();
          ordemcol = parseInt(ordemcol);

          if(ordem == "asc"){
            this.itens.sort(function(a,b){
              if(Object.values(a)[ordemcol] > Object.values(b)[ordemcol]){return 1;}
              if (Object.values(a)[ordemcol] < Object.values(b)[ordemcol]){return -1;}
              return 0;
          });
          }else{
            this.itens.sort(function(a,b){
              if(Object.values(a)[ordemcol] <  Object.values(b)[ordemcol]){return 1;}
              if (Object.values(a)[ordemcol] >  Object.values(b)[ordemcol]) {return -1;}
              return 0;
            });
          }
          /** campo de busca */
           if (this.buscar){
              return this.itens.filter(res =>{
                res = Object.values(res);
                for(let i = 0; i < res.length; i++){
                  if((res[i] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                    return true;
                  }           
              } 
              return false;
              });
           }
          return this.itens;
        }
      }
    }
</script>