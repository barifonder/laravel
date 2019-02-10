	@if(session()->has('succes'))
				<div class="alert alert-success" role="alert">
					{{ session()->get('succes') }}
				</div>
	@endif
	<!-- pour le suppression-->
	@if(session()->has('delete'))
		<div class="alert alert-success" role="alert">
			{{ session()->get('delete') }}
		</div>
	@endif
	<!-- pour modification-->
	@if(session()->has('update'))
		<div class="alert alert-success" role="alert">
			{{ session()->get('update') }}
		</div>
	@endif			