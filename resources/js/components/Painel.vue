<template>
    <div class="card">
        <div v-bind:class="defineCor"> {{ titulo }} </div>

        <div class="card-body">
           <slot></slot>
        </div>
    </div>
</template>

<script>
   export default {
      props:['titulo', 'cor'],
      computed:{
         defineCor: function(){
            return "card-header " + ( this.cor || "bg-white") ;
         }
      }

   };
</script>

<style>
  .blue {    
    border-color: #004781 !important;
    background-color: #004781;
}

   .blue >.card-header >{
    color: #f7f7f7;
    background-color: #004781;
    border-color: #004781;
}

.orange {    
    border-color: #ac4414 !important;
    background-color: #ac4414;
}

   .orange >.card-header >{
    color: #f7f7f7;
    background-color: #ac4414;
    border-color: #ac4414;
}

.danger {    
    border-color: #be1111 !important;
    background-color: #be1111;
}

   .orange >.card-header >{
    color: #f7f7f7;
    background-color: #be1111;
    border-color: #be1111;
}




</style>
