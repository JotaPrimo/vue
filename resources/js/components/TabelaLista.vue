<template>

    <div>


            <div class="form-inline flex mb-2" style="justify-content: space-between">
                <a v-if="criar" v-bind:href="criar">Criar</a>
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">

                    <div class="input-group-append">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>


                    </div>

                </div>

            </div>



    <table class="table table-hover table-responsive-sm">

        <thead>

        <tr>
            <th style="cursor: pointer;" v-on:click="ordernaColuna(index)" scope="col" v-for="(titulo, index) in titulos">{{ titulo }}</th>
            <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(iten, index) in lista">

            <th v-for="i in iten" scope="row"> {{ i }} </th>

            <td v-if="detalhe || editar || deletar">


                <form v-if="deletar && token" v-bind:action="deletar" method="post" v-bind:id="index">

                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" v-bind:value="token">

                    <a v-if="editar" v-bind:href="editar">
                        <button class="btn btn-warning">
                            Editar
                        </button>
                    </a>

                    <a v-if="detalhe" v-bind:href="detalhe">
                        <button class="btn btn-info">
                            Detalhe
                        </button>
                    </a>

                    <button class="btn btn-secondary" v-on:onclick="executaForm(index)">
                        Deletar
                    </button>


                </form>


                <span v-if="!token">
                     <a v-if="editar" v-bind:href="editar">
                    <button class="btn btn-warning">
                        Editar
                    </button>
                </a>

                     <a v-if="detalhe" v-bind:href="detalhe">
                    <button class="btn btn-info">
                        Detalhe
                    </button>
                </a>

                    <a v-if="deletar" v-bind:href="deletar">
                    <button class="btn btn-danger">
                        Deletar
                    </button>
                </a>
                </span>


                <span v-if="token && !deletar">
                     <a v-if="editar" v-bind:href="editar">
                    <button class="btn btn-warning">
                        Editar
                    </button>
                </a>

                     <a v-if="detalhe" v-bind:href="detalhe">
                    <button class="btn btn-info">
                        Detalhe
                    </button>
                </a>

                </span>


            </td>
        </tr>

        </tbody>

        <tfoot>
        <tr>
            <th scope="col" v-for="titulo in titulos">{{ titulo }}</th>
            <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
        </tfoot>

    </table>

    </div>
</template>

<script>
    export default {

      props: ['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token', 'ordem', 'ordemCol'],
        data: function () {
          return {
              buscar: '',
              ordemAux: this.ordem || "asc",
              ordemAuxCol: this.ordemCol || 0,

          }
        },

      methods: {
          executaForm: function (index) {
              document.getElementById('index').submit();
          },

          ordernaColuna: function (coluna) {
              this.ordemAuxCol = coluna;
              if(this.ordemAux.toLowerCase() == "asc") {
                  this.ordemAux =  'desc';
              } else {
                  this.ordemAux = 'asc';
              }

          }
      },

        computed: {
          lista: function () {

              let ordem = this.ordemAux;
              let ordemCol = this.ordemAuxCol;

              ordem = ordem.toLowerCase();
              ordemCol = parseInt(ordemCol);



              if(ordem == "asc") {

                  this.itens.sort(function (a, b) {
                      if(a[ordemCol] > b[ordemCol]) { return 1;  }
                      if(a[ordemCol] < b[ordemCol]) { return -1; }
                      return 0;
                  });
              } else {
                  this.itens.sort(function (a, b) {
                      if(a[ordemCol] < b[ordemCol]) { return 1;  }
                      if(a[ordemCol] > b[ordemCol]) { return -1; }
                      return 0;
                  });
              }




              return this.itens.filter(res => {

                  for (let k = 0; k < res.length; k++) {
                      if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0) {
                          return true;
                      }
                  }

                  return false;

              });

              return this.itens;
          }
        }
    }
</script>
