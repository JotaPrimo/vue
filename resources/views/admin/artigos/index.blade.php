@extends('layouts.app')

@section('content')

    <pagina>

        <painel titulo="Lista de Artigos">

            <migalhas v-bind:lista="{{ $listaMigalhas }}"> </migalhas>

            <tabela-lista
                v-bind:titulos="['ID', 'Titulo', 'Descrição', 'Autor', 'Data' ]"
                v-bind:itens="
                [
                    [1, 'Curso Vue', 'Curso Vue', 'Jota Santos', '10/10/2020'],
                    [2, 'Curso PHP 8', 'Curso PHP 8', 'Jessica Santos', '00/12/2020'],
                    [3, 'Curso Laravel 7', 'Curso Laravel 7', 'Caleb Santos', '00/12/2020'],
                    [4, 'Curso Spring boot ', 'Spring boot', 'Jughead Santos', '00/12/2020']
                ]"
                ordem="desc" ordemCol="2"
                detalhe="#detalhe" criar="#criar" editar="#editar" deletar="#deletar" token="7888875"

            >
            </tabela-lista>

        </painel>

    </pagina>

@endsection
