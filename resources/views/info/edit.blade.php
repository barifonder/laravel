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
				<form action="{{ url('infos/'.$infos->id) }}" method="post">
						<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
						<div class="form-group">
						<label for="">client_id</label>
						<select name="client_id" class="form-control">
				         <option ></option>
				            @foreach($clients as $art) 
				            	<option value="{{ $art->id }}" > {{ $art->nom }} </option> 
				            @endforeach
				        </select>
					</div>
					<div class="form-group">
						<label for="">Nom</label>
						<input type="text" name="nom" class="form-control" value="{{ $infos->nom }}">
					</div>
					<div class="form-group">
						<label for="">Prenom</label>
						<input type="text" name="prenom" class="form-control" value="{{ $infos->prenom }}">
					</div>
					<div class="form-group">
						<label for="">Adresse</label>
						<input type="text" name="adresse" class="form-control" value="{{ $infos->adresse }}">
					</div>				
										
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-danger" value="modifier">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection