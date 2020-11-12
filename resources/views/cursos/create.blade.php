@extends('layouts.plantilla')
@section('title', 'Crear cursos')
@section('content')    
<h1>Crear cursos</h1>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label >Nombre:
        <br>
    <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
        <br>
            <small>*{{$message}}</small>        
        <br>
    @enderror
    <br><br>
    <label>Descripcion: 
        <br>
    <textarea type="text" name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label>
     @error('descripcion')
        <br>
            <small>*{{$message}}</small>        
        <br>
    @enderror
    <br><br>
    <label >
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
     @error('categoria')
        <br>
            <small>*{{$message}}</small>        
        <br>
    @enderror
    <br><br>
    <button type="submit">Enviar formulario</button>
</form>
@endsection