@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1>Crea un curso</h1>

    

    <form action="{{route('curso.store')}}" method="POST">

        @csrf 
        
        <label>
            Nombre:
            <br>
            <input type="text" name='name'>
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
