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
				<form action="{{ url('articles') }}" method="post"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="">Designation</label>
						<input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
					</div>
					<div class="form-group @if($errors->get('pu')) has-error @endif">
						<label for="Prix unitaire">Prix unitaire</label>
						<input type="text" name="pu" class="form-control" value="{{ old('pu') }}">
						@foreach($errors->get('pu') as $message)
							<li style="color: red;">{{ $message }}</li>
						@endforeach
					</div>
					<div class="form-group">
						<label for="">Photo de l'article</label>
						<input type="file" class="form-control" name="photo">
					</div>					
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection