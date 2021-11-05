@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-10">

           <painel titulo="Dashboard">
                 <div class="row">

                 <div class="col-md-4">
                    <painel titulo="conteúdo 1" cor="blue">
                        Teste de conteúdo 1
                    </painel>
                 </div>


                  <div class="col-md-4">
                    <painel titulo="conteúdo 2" cor="orange">
                        Teste de conteúdo 2
                    </painel>
                 </div>


                  <div class="col-md-4">
                    <painel titulo="conteúdo 3" cor="danger">
                        Teste de conteúdo 3
                    </painel>
                 </div>

            </div>
           </painel>
           

        </div>

    </div>

</div>
@endsection
