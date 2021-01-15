@extends('layout.app')
@section('content')
<div class="row m-3">
	<div class="col-6 mb-3 text-left">
		<h4>{{ $aReport['student']->first_name . ' ' . $aReport['student']->last_name }}<hr class="m-0"/></h4>
	</div>
	<div class="col-6 text-right">
		<a href="{{ url('student/class/' . $aReport['student']->classe_id) }}"><i class="fa fa-arrow-left"></i> Retour</a>
	</div>
</div>

<div class="row m-3">
	<div class="col-12 text-right">
		<label><strong>{{ $aReport['student']->first_name . ' ' . $aReport['student']->last_name }}</strong></label><br/>
		<label>{{ $aReport['student']->classe->label }}</label><br/>
		<label>N° {{ $aReport['student']->id }}</label><br/>
		<label>{{ 'F' == $aReport['student']->sexe ? 'Féminin' : 'Masculin' }}</label><br/>
	</div>
	<div class="col-12 mt-3">
		<table class="table">
			<thead>
				<tr>
					<th>Matière</th>
					<th>Note</th>
					<th>Coeff</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $aReport['note'] as $k => $v )
				<tr>
					<td>{{ $k }}</td>
					<td>{{ $v['value'] }}</td>
					<td>{{ $v['coeff'] }}</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td>Total</td>
					<td><strong>{{ $aReport['totalNote'] . ' / ' . $aReport['maxNote'] }}</strong></td>
					<td></td>
				</tr>
				<tr>
					<td>Moyenne</td>
					<td><strong>{{ $aReport['moyenne'] }}</strong></td>
					<td></td>
				</tr>
				<tr>
					<td>Rang</td>
					<td><strong>{{ $aReport['rang'] . ' / ' . $aReport['totalStudent'] }}</strong></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

@endsection