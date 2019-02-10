@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>La liste du commande </h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div class="pull-right">
					<a href="{{ url('commandes/create') }}" class="primary">ajouter un nouveau commande</a>
				</div>
				<br><br><br>
				<table class="table">
					<head>						
					 	<tr>					
							<th>ID</th>
							<th>ID article</th>
							<th>ID client </th>
							<th>Date de creation</th>	
							<th>action</th>	
							<th></th>				
						</tr>					
					</head>
					<body>						
					<tr>					
							@foreach($commandes as $commande)						
							<td>{{ $commande->id }}</td>
							<td> {{ $commande->article_id }}</td>
							<td>{{ $commande->client->nom }}</td>
							<td>{{ $commande->created_at }}</td>
						
							<td>								
								<form action="{{ url('commandes/'.$commande->id) }}" method="post" >
									
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									<a href="{{ url('commandes/'. $commande->id) }}" class="btn btn-primary">Details</a>
									<a href="{{ url('commandes/'.$commande->id.'/edit') }}" class="btn btn-default">Editer</a>
									<button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce element')">Supprimer</button>
								</form>								
							</td>							
						</tr>
					</body>		
						@endforeach
				</table>
				
			</div>
		</div>
	</div>

@endsection