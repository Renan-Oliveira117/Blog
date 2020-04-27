<template>
    <div>
        <div v-if="item">
            <button v-on:click="PreencheFormulario()" v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'"  data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</button>
            <button v-on:click="PreencheFormulario()" v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</button>
            <a  v-on:click="PreencheFormulario()" v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</a>
        </div>

        <div v-if="!item">
            <button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" v-bind:class="css || 'btn btn-primary'"  data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</button>
            <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</button>
            <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#'+ nome">{{titulo}}</a>
        </div>
    </div>
</template>

<script>
export default {
    props:['tipo','nome','titulo','css','item'],
    methods:{
        PreencheFormulario:function(){
            this.$store.commit('setItem',this.item);
        }
    }
}
</script>