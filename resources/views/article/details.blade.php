@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Le details un article </h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div class="pull-right">
					<a href="{{ url('/articles') }}" class="primary">retour a la page d'acceuil</a>
				</div>

				 <table class="table">
					<img src="{{ asset('storage/'.$article->photo) }}" alt="" class="img-thumbnail">
					<head>						
					 	<tr>					
							<th>ID</th>
							<th>Designation</th>
							<th>Prix unitaire</th>
							<th>Date de creation</th>
							<th>Action</th>
						</tr>					
					</head>
					<body>						
					<tr>					
						
							<td>{{ $article->id }}</td>
							<td>{{ $article->designation }}</td>
							<td>{{ $article->pu }}</td>
							<td>{{ $article->created_at }}</td>
							<td>								
												
							</td>							
						</tr>
					</body>		
						
				</table>
				
			</div>
		</div>
	</div>

@endsection