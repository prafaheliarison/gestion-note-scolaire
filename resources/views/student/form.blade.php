@extends('layout.app')
@section('content')
@if ( session()->has('message') )
<div class="alert alert-success mt-3">
	<h6>{{ session()->get('message') }}</h6>
</div>
@endif
<div class="row m-3">
	<div class="col-6 mb-3 text-left">
		<h4>{{ !empty($oStudent) ? $oStudent->first_name . ' ' . $oStudent->last_name : 'Nouvel élève' }}<hr class="m-0"/></h4>
	</div>
	<div class="col-6 text-right">
		<a href="{{ !empty($oStudent) ? url('student/class/' . $oStudent->classe_id) : '' }}"><i class="fa fa-arrow-left"></i> Retour</a>
	</div>
</div>

<div class="row m-3">
    <div class="col-12">
    	{{ Form::open(array('url' => 'student/save')) }}
    	<input type="hidden" name="id" value="{{ !empty($oStudent) ? $oStudent->id : 0 }}" />
        <div class="form-group">
        	<label for="classe_id">Classe</label>
        	<select name="classe_id" id="classe_id" class="form-control" required="required">
        		<option value="">--</option>
        		@foreach ( $oClasses as $oClasse )
        		<option value="{{ $oClasse->id }}" {{ !empty($oStudent) ? $oClasse->id == $oStudent->classe_id ? 'selected="selected"' : '' : '' }}>{{ $oClasse->label }}</option>
        		@endforeach
        	</select>
        </div>
        <div class="form-group">
        	<label for="first_name">Prénom</label>
        	<input type="text" class="form-control" name="first_name" placeholder="Prénom" id="first_name" value="{{ !empty($oStudent) ? $oStudent->first_name : '' }}" />
        </div>
        <div class="form-group">
        	<label for="last_name">Nom</label>
        	<input type="text" class="form-control" name="last_name" placeholder="Nom" id="last_name" value="{{ !empty($oStudent) ? $oStudent->last_name : '' }}" required="required" />
        </div>
		<div class="form-check-inline">
			<label class="form-check-label"> 
				<input type="radio" name="sexe" value="F" {{ !empty($oStudent) ? 'F' == $oStudent->sexe ? 'checked="checked"' : '' : '' }} class="form-check-input" value="">Féminin
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label"> 
				<input type="radio" name="sexe" value="M" {{ !empty($oStudent) ? 'M' == $oStudent->sexe ? 'checked="checked"' : '' : '' }} class="form-check-input" value="">Masculin
			</label>
		</div>
		<div class="mt-3">
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</div>
    	{{ Form::close() }}
	</div>
</div>
@endsection