<template>

    <div>
    <a href="#">Criar</a>

    <table class="table table-hover table-responsive-sm">

        <thead>

        <tr>
            <th scope="col" v-for="titulo in titulos">{{ titulo }}</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="iten in itens">
            <th v-for="i in iten" scope="row"> {{ i }} </th>
            <td>
                <a href="#">
                    <button class="btn btn-warning">
                        Editar
                    </button>
                </a>


                <a href="#">
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
        </tr>
        </tfoot>

    </table>

    </div>
</template>

<script>
    export default {
      props: ['titulos', 'itens']
    }
</script>
