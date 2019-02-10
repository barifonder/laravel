@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Le details un article </h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div class="pull-right">
					<a href="{{ url('/clients') }}" class="primary">retour a la page d'acceuil</a>
				</div>

				 <table class="table">
				
					<head>						
					 	<tr>					
							<th>ID</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Adresse</th>
							<th>Ville</th>
							<th>Telephone</th>							
							<th>Action</th>
						</tr>					
					</head>
					<body>						
					<tr>					
						
							<td>{{ $client->id }}</td>
							<td>{{ $client->nom }}</td>
							<td>{{ $client->prenom }}</td>
							<td>{{ $client->adresse }}</td>
							<td>{{ $client->ville }}</td>
							<td>{{ $client->tel }}</td>
							<td>{{ $client->created_at }}</td>
							<td>								
												
							</td>							
						</tr>
					</body>		
						
				</table>
				
			</div>
		</div>
	</div>

@endsection