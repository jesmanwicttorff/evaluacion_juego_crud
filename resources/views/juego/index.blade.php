@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{url('juego/create')}}" class="btn btn-success">Registrar Juego</a>
<br>
<br>
<br>
<h1>Lista de Juegos</h1>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>URL Del Juego</th>
            <th>Nombre del Juego</th>
            <th>URL de La Imagen</th>
            <th>Acciones</th>
        </tr>

    </thead>
    <tbody>
        @foreach($juegos as $juego)
        <tr>
            <td>{{ $juego->id }}</td>
            <td><a href="{{url($juego->urlJuego)}}">{{ $juego->urlJuego }}</a></td>
            <td>{{ $juego ->nombreJuego }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$juego ->urlImagenJuego}}" alt="" width="200">
            </td>
            
            <td><a href="{{ url('/juego/'.$juego->id.'/edit') }}"  class="btn btn-warning">Editar</a>
               
                 
                <form action="{{url('/juego/'.$juego->id)}}" method="POST" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas eliminar el juego?')" value="Eliminar">
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection