@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Le details un article </h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div class="pull-right">
					<a href="{{ url('/commandes') }}" class="primary">retour a la page d'acceuil</a>
				</div>

				 <table class="table">
				
					<head>						
					 	<tr>					
							<th>ID</th>
							<th>id article</th>
							<th>id client</th>						
							<th>date de modification</th>								
						
						</tr>					
					</head>
					<body>						
					<tr>					
							<td>{{ $commande->id }}</td>
							<td>{{ $commande->article->pu }}</td>
							<td>{{ $commande->client_id }}</td>
							<td>{{ $commande->updated_at }}</td>
							
						
							<td>								
												
							</td>							
						</tr>
					</body>		
						
				</table>
				
			</div>
		</div>
	</div>

@endsection