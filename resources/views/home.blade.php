@extends('layouts.app')

@section('content')

    <pagina>
                    <painel titulo="Dashboard">

                        <migalhas v-bind:lista="{{ $listaMigalhas }}"> </migalhas>

                       <div class="row">

                           <div class="card text-white bg-primary mb-3 m-auto" style="max-width: 18rem;">
                               <div class="card-header">Header</div>
                               <div class="card-body">
                                   <h5 class="card-title">Artigos</h5>
                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               </div>

                               <div class="card-footer bg-light">
                                   <a href="{{ route('artigos.index') }}">
                                       <i class="far fa-file-image fa-3x"></i>
                                   </a>
                               </div>

                           </div>

                           <div class="card text-white bg-secondary mb-3 m-auto" style="max-width: 18rem;">
                               <div class="card-header">Header</div>
                               <div class="card-body">
                                   <h5 class="card-title">Secondary card title</h5>
                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               </div>
                           </div>

                           <div class="card text-white bg-success mb-3 m-auto" style="max-width: 18rem;">
                               <div class="card-header">Header</div>
                               <div class="card-body">
                                   <h5 class="card-title">Success card title</h5>
                                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                               </div>
                           </div>


                       </div>

                        <div class="mt-3">

                        </div>

                        <div class="row">

                            <div class="card text-white bg-danger mb-3 m-auto" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                            <div class="card text-white bg-dark mb-3 m-auto" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Secondary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                            <div class="card text-white bg-info mb-3 m-auto" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>


                        </div>


                    </painel>


    </pagina>
@endsection
