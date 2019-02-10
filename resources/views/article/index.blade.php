@extends('layouts.app')


@section('content')

	

	<div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
						<h1 class="pull-right"> Product</h1>
				<!-- pour l'ajoutement et modification et suppression-->
				

				<div >

					
				</div>

                        <table class="table" id="datatable">
                            <thead>
                               <tr>					
									<th>ID</th>
									<th>Destignation</th>
									<th>Price</th>
									<th>created</th>
									<th>Action</th>
									
							</tr>		
                            </thead>
                            <tbody>                         
                                <tr>
		                    @foreach($articles as $article)
									<td>{{ $article->id }}</td>
									<td>{{ $article->designation }}</td>
									<td>{{ $article->pu }}</td>
									<td>{{ $article->created_at }}</td>
									<td>								
										<form action="{{ url('articles/'.$article->id) }}" method="post" >
											
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											<a href="{{ url('articles/'. $article->id) }}" class="btn btn-primary">
												search
											</a>										<a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-default">Edit</a>
											<button type="submit" class="btn btn-danger" onclick="return confirm('are you sure !!!')">Delete</button>
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

