@extends('layouts.app')


@section('content')

	<div class=" container row">
		<div class="col-md-12">
			<h1>@{{ message }}</h1>
			<div class="panel panel-primary">		
				<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item" v-for="experience in infos">								
								<h3>@{{ infos }}</h3>								
							</li>
						</ul>
				</div>
			</div>		
		</div>
		

@endsection


@section('javascripts')

 <script src="{{ asset('js/vue.js') }}"></script>

<script src="{{ asset('js/axios.js') }}"></script>
 

<script>
	var app = new Vue({
		el: '#app',
		data: {
			message: 'je suis mohamed',
			infos: []
		},
		methods: {
			getInfos : function(){
				axios.get('http://localhost:8000/getinfos')
				.then(response => {
					this.infos = response.data;
				})
				.catch(error => {
					console.log('errors : ', error)
				})
			}
		},
		mounted: function(){
			this.getInfos();
		}
	});
</script>

@endsection