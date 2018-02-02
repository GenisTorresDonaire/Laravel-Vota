@extends('layouts.app')

@section('content')

    Consultas
    <div class="row">
	    @foreach( $arrayConsultas as $key => $consulta )
	    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <h4>{{$consulta['consulta']}}</h4>
	    </div>
	    @endforeach
	</div>

@stop