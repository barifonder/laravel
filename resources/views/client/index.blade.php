@extends('layouts.app')


@section('content')

	

	<div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
						<h1 class="pull-right">Clients</h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div >
					<a href="{{ url('articles/create') }}" class="primary">Add new Client</a>
				</div>

                        <table class="table" id="datatable">
                            <thead>
                             <tr>					
							<th>ID</th>
							<th>Name</th>
							<th>Lastname</th>
							<th>Adresse</th>
							<th>City</th>
							<th>number phone</th>							
							<th>Action</th>
						</tr>	
                            </thead>
                            <tbody>                         
                                <tr>
		                  @foreach($clients as $client)
							<td>{{ $client->id }}</td>
							<td>{{ $client->nom }}</td>
							<td>{{ $client->prenom }}</td>
							<td>{{ $client->adresse }}</td>
							<td>{{ $client->ville }}</td>
							<td>{{ $client->tel }}</td>
							<td>								
								<form action="{{ url('clients/'.$client->id) }}" method="post" >
									
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									<a href="{{ url('clients/'. $client->id) }}" class="btn btn-primary">Details</a>
									<a href="{{ url('clients/'.$client->id.'/edit') }}" class="btn btn-default">Editer</a>
									<button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce element')">Supprimer</button>
								</form>								
							</td>							
						</tr>					    	
						@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

