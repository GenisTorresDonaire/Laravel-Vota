@extends('layouts.app')

@section('content')

    <h1>Creacion Consulta</h1>
    
    <form action="{{url('consultas')}}" method="POST">
    {{ csrf_field() }}
    	<label>Nombre Consulta: </label>
    	<br>
    	<input type="text" name="nombreConsulta"></p>
    	<label>Creador: </label>
    	<br>
    	<input type="number" name="usuario"></p>
    	<br>
    	<button class="btn btn-danger">Crear</button>
    </form>

@stop