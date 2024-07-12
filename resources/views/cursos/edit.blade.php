@extends('layouts.plantilla')
@section('title', 'curso edit')
@section('content')
    <h1>edita un curso</h1>

    <form action="{{ route('cursos.update' , $curso) }}" method="post">

        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name='name' value="{{ $curso->name }}">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{ $curso->descripcion }}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>
        <br>
        <button type="submit">actualizar Formulario</button>
    </form>
@endsection
