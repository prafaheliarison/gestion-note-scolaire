@extends('layout.app')
@section('content')
@if ( session()->has('message') )
<div class="alert alert-success mt-3">
	<h6>{{ session()->get('message') }}</h6>
</div>
@endif
<div class="row m-3">
	<div class="col-6 mb-3 text-left">
		<h4>{{ $oStudent->first_name . ' ' . $oStudent->last_name }}<hr class="m-0"/></h4>
	</div>
	<div class="col-6 text-right">
		<a href="{{ url('/') }}"><i class="fa fa-arrow-left"></i> Retour</a>
	</div>
</div>
<div class="row m-3">	
	<div class="col-12 mb-3">
	{{ Form::open(array('url' => 'save_note')) }}
	<input type="hidden" name="eleve_id" value="{{ $oStudent->id }}" />
	@foreach ( $oMatieres as $oMatiere )
	<div class="row">
    	<div class="col-12 mb-3">
    		<div class="row">
    			<div class="col-3">{{ $oMatiere->name . ' (/' . 20 * $oMatiere->coeff . ')' }}</div>
    			<div class="col-6">
    				<input type="number" max="{{ 20 * $oMatiere->coeff }}" step=".01" name="value_{{ $oMatiere->id }}" value="{{ !empty($aStudentNotes[$oMatiere->id]) ? $aStudentNotes[$oMatiere->id]['value'] : '' }}" class="form-control" />
    				<input type="hidden" name="note_{{ $oMatiere->id }}" value="{{ !empty($aStudentNotes[$oMatiere->id]) ? $aStudentNotes[$oMatiere->id]['id'] : 0 }}" />
    			</div>
    		</div>
    	</div>
	</div>
	@endforeach
	<button class="btn btn-primary">Enregistrer</button>
	{{ Form::close() }}
	</div>
</div>
@endsection