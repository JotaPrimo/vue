@extends('layouts.app')

@section('content')

    <pagina>

        <painel titulo="Lista de Artigos">

            <tabela-lista
                v-bind:titulos="['ID', 'Titulo', 'Descrição', 'Autor', 'Data', 'Ações' ]"
                v-bind:itens="
                [
                    [1, 'Curso Vue', 'Descrição Curso Vue', 'Jota Santos', '10/10/2020'],
                    [2, 'Curso PHP 8', 'Descrição Curso PHP 8', 'Jota Santos', '00/12/2020'],
                    [2, 'Curso Laravel 8', 'Descrição Curso Laravel 8', 'Jota Santos', '00/12/2020']
                ]"

            >
            </tabela-lista>

        </painel>

    </pagina>

@endsection
