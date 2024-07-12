<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index () {

        $curso = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('curso'));
    }

    public function create () { 
        return view('cursos.create');
    }

    public function store (Request $request) {
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){

        return view('cursos.show', ['curso' => $curso]);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));   
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

}
