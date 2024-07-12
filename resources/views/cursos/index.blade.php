@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($curso as $cursos)
            <li>
                <a href="{{route('cursos.show', $cursos->id)}}">{{ $cursos->name }}</a>

            </li>
        @endforeach
    </ul>

    {{ $curso->links() }}
@endsection
