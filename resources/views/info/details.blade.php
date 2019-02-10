@extends('layouts.app')


@section('content')

    <div class="container" id="app">
        @{{message}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="item in infos">
                            <div class="pull-right">
                                <button class="btn btn-warning btn-sm">Editer</button>
                            </div>
                            <h3>Nom : @{{ infos.nom }}</h3>
                            <h2>Prenom : @{{ message }} - Adresse : @{{ message }}</h2>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>







@endsection

@section('javascripts')

    <script src="{{ asset('js/vue.js') }}"></script>

    <script src="{{ asset('js/axios.js') }}"></script>

    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
            'id'  => $id,
            'url'  => url('/')
        ]) !!};
    </script>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'je suis mohamed',
                infos: []
            },
            methods: {
                getInfos: function () {
                    axios.get(window.Laravel.url + '/getinfos/' + window.Laravel.id)
                        .then(response =>{
                        this.infos = response.data;
                        console.log(response.data);
                })
                .
                    catch(error => {
                        console.log('errors : ', error);
                })
                }
            },
            mounted: function () {
                this.getInfos();
                //alert(this.infos.nom);
            }
        });
    </script>


@endsection