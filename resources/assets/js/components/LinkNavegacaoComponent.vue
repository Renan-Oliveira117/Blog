<template>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li v-for="(item,index) in link" :key="index" class="breadcrumb-item">
                <a v-if="item.url" v-bind:class=" DefineClass" v-bind:href="item.url">{{item.titulo}}</a>
                <span v-if="!item.url">{{item.titulo}} </span>
           </li>
        </ol>
    </nav>
</template>


<script>
export default {
    props:['link'],
   computed:{
       DefineClass: function(){
           if(this.url){
               return "active";
           }else{
               return "";
           }
       }
   }
}
</script>