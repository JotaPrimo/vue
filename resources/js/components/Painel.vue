<template>
    <div class="card mt-3">
        <div class="card-header bg-white"> {{ titulo }} </div>

        <div class="card-body">
           <slot></slot>
        </div>
    </div>
</template>

<script>
   export default {
      props:['titulo']

   };
</script>
