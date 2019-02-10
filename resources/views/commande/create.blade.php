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
				<form action="{{ url('commandes') }}" method="post"  enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="">Nom Article </label>

					 	<select name="article_id" class="form-control">
				         <option value="{{ old('article_id') }}"></option>
				            @foreach($articles as $art) 
				            	<option value="{{ $art->id }}" > {{ $art->designation }} </option> 
				            @endforeach
				        </select>	

					</div>
					<div class="form-group">
						<label for="">Nom Client </label>
						<select name="client_id" class="form-control">
				         <option value="{{ old('client_id') }}"></option>
				            @foreach($clients as $clt) 
				            	<option value="{{ $clt->id }}" > {{ $clt->nom }} </option> 
				            @endforeach
				        </select>	
					</div>																	
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection