@extends('layouts.app')


@section('content')

@if(count($errors))
<div class="alert alert-danger" role="alert">	
	<ul>			
	@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
	@endforeach
  </ul>
</div>
@endif

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{ url('commandes/'.$commande->id) }}" method="post">
					<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">article_id</label>
						<select name="client_id" class="form-control">
				         <option ></option>
				            @foreach($articles as $art) 
				            	<option value="{{ $art->id }}" > {{ $art->designation }} </option> 
				            @endforeach
				        </select>
					</div>
					<div class="form-group">
						<label for="">client_id</label>
						<select name="article_id" class="form-control">
				         <option ></option>
				            @foreach($clients as $art) 
				            	<option value="{{ $art->id }}" > {{ $art->nom }} </option> 
				            @endforeach
				        </select>
					</div>
												
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-danger" value="modifier">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection