@extends('layout.app')
@section('content')
@if ( session()->has('message') )
<div class="alert alert-success mt-3">
	<h6>{{ session()->get('message') }}</h6>
</div>
@endif
{{ Form::open(array('url' => 'student/remove', 'id' => 'form-remove')) }}
<input type="hidden" name="id" value="" />
{{ Form::close() }}
<div class="row">
	<div class="col-12 text-right mt-3 mb-4">
		<a role="button" class="btn btn-primary" href="{{ url('student/add') }}">Nouvel élève</a>
	</div>
	<div class="col-12 table-responsive">
		<table class="table table-bordered table-striped">
        	<thead>
        		<tr>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>Classe</th>
                    <th>Action</th>
                </tr>
            </thead>            
            <tbody>
            	@foreach($oStudents as $oStudent)
            	<tr>
                    <td>{{ $oStudent->first_name . ' ' . $oStudent->last_name }}</td>
                    <td>{{ 'F' == $oStudent->sexe ? 'Féminin' : 'Masculin' }}</td>
                    <td>{{ $oStudent->classe->label }}</td>                    
                    <td>
                    	<a href="{{ url('student/note/' . $oStudent->id) }}">Notes | </a>
                    	<a href="{{ url('student/report/' . $oStudent->id) }}">Bulettin | </a>
                    	<a href="{{ url('student/' . $oStudent->id) }}">Editer | </a>
                    	<a class="remove" data-id="{{ $oStudent->id }}" href="#">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>            
        </table>
        <div class="d-flex justify-content-center">
        	{{ $oStudents->links() }}
        </div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	sayna.removeStudent();
</script>
@endsection