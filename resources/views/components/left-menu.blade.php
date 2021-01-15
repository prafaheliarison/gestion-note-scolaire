<a href="{{ url('/') }}">Eleves</a>
@foreach ( $oClasses as $oClasse )
	<br/><br/><i class="fa fa-angle-right ml-3"></i><a href="{{ url('student/class/' . $oClasse->id ) }}" class="pl-1">{{ $oClasse->label }}</a>
@endforeach
<!-- <br/><br/><a href="#">Enseignants</a>
<br/><br/><a href="#">Classes</a>
<br/><br/><a href="#">Matières</a>-->