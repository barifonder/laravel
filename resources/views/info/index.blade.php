@extends('layouts.app')


@section('content')

	<div class="container" >
		@{{message}}
        	<div class="row">
        	    <div class="col-md-12">
        	      <div class="panel panel-primary">
        	      	<div class="panel-headin">
        	      		<div class="row">	
        	      		<div class="col-md-10">        	      		
        	      			<div class="col-md-2 text-right">
        	      				<button class="btn btn-success" @click="open = true ">Ajouter</button>
        	      			</div>
        	      			</div>
        	      		</div>
        	      	</div>
        	    

                   <div class="panel-body">
					

					<div class="form-group">
						<label for="">nom</label>
						<input type="text" class="form-control">

					</div>

					<div class="form-group">
						<label for="">prenom</label>
						<input type="text" class="form-control">

					</div>

					<div class="form-group">
						<label for="">Adresse</label>
						<input type="text" class="form-control">

					</div>

					<div class="form-group">
						<label for="">Ville</label>
						<input type="text" class="form-control">

					</div>

					<div class="form-group">
						<label for="">Telephone</label>
						<input type="text" class="form-control">

					</div>
					<button class="btn btn-info btn-block" type="">ajouter</button>




					<ul class="list-group">
						<li class="list-group-item" v-for="experience in infos">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Nom : @{{ experience.nom }}</h3>							
							<h2>Prenom : @{{ experience.prenom }} - Adresse : @{{ experience.adresse }}</h2>
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
            'idClient'  => 1,
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
			getInfos : function(){
				axios.get(window.Laravel.url+'/getinfos/'+window.Laravel.idClient)
				.then(response => {
					this.infos = response.data;
					console.log('succes : ', response.data);
				})
				.catch(error => {
					console.log('errors : ', error);
				})
			}
		},
		mounted: function(){
			this.getInfos();
		}
	});
</script>


@endsection