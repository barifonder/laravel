@extends('layouts.app')


@section('content')





 <br><br>	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{ url('articles/'.$article->id) }}" method="post">
					<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}				  
					<div class="form-group">
						<label for="">Designation</label>
						<input type="text" name="designation" class="form-control" value="{{ $article->designation }}">
						@foreach($errors->get('designation') as $message)
							<li style="color: red;">{{ $message }}</li>
						@endforeach
					</div>
					<div class="form-group">
						<label for="">Price</label>
						<input type="text" name="pu" class="form-control" value="{{ $article->pu }}">
						@foreach($errors->get('pu') as $message)
							<li style="color: red;">{{ $message }}</li>
						@endforeach
					</div>
					
					<div class="form-group">				
						<input type="submit" class="form-control btn btn-danger" value="change">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection