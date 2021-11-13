<template>

    <div>
    <a v-if="criar" v-bind:href="criar">Criar</a>

    <table class="table table-hover table-responsive-sm">

        <thead>

        <tr>
            <th scope="col" v-for="titulo in titulos">{{ titulo }}</th>
            <th v-if="detalhe || editar || deletar">Ação</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="iten in itens">

            <th v-for="i in iten" scope="row"> {{ i }} </th>

            <td v-if="detalhe || editar || deletar">


                <form v-if="deletar && token" action="" method="post">

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

                    <a v-if="deletar" v-bind:href="deletar">
                        <button class="btn btn-danger">
                            Deletar
                        </button>
                    </a>


                </form>


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
      props: ['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token']
    }
</script>
