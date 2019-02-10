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
				<form action="{{ url('clients') }}" method="post"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Nom</label>
						<input type="text" name="nom" class="form-control" value="{{ old('nom') }}">
					</div>
					<div class="form-group">
						<label for="">Prenom</label>
						<input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}">
					</div>
					<div class="form-group">
						<label for="">Adresse</label>
						<input type="text" name="adresse" class="form-control" value="{{ old('adresse') }}">
					</div>
					<div class="form-group">
						<label for="">Ville</label>
						<input type="text" name="ville" class="form-control" value="{{ old('ville') }}">
					</div>
					<div class="form-group @if($errors->get('pu')) has-error @endif">
						<label for="">Telephone</label>
						<input type="text" name="tel" class="form-control" value="{{ old('tel') }}">
						@foreach($errors->get('pu') as $message)
							<li style="color: red;">{{ $message }}</li>
						@endforeach
					</div>
										
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection