@extends('layouts.plantilla')
@section('title', 'cursos')
@section('content')    
<h1>Hola bienvenido a la pagina principal de Cursos</h1>
<a href="{{route('cursos.create')}}">Curso create</a>
<ul>
    @foreach ($cursos as $curso)
        <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a><br>
        {{route('cursos.show',$curso)}}<br>
    @endforeach
</ul>
{{$cursos->links()}}
@endsection