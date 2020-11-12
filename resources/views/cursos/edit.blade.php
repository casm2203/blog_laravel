@extends('layouts.plantilla')
@section('title', 'Editar Cursos')
@section('content')    
<h1>Editar Cursos</h1>
<form action="{{route('cursos.update',$curso)}}" method="Post">
    @csrf
    @method('put')
    
    <label >Nombre:
        <br>
    <input type="text" name="name" value="{{old('name',$curso->name)}}">
    </label>
     @error('name')
        <br>
            <small>*{{$message}}</small>        
        <br>
    @enderror
    <br><br>
    <label>Descripcion: 
        <br>
    <textarea type="text" name="descripcion" rows="5" >{{old('descripcion',$curso->descripcion)}}</textarea>
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
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
    </label>
         @error('categoria')
        <br>
            <small>*{{$message}}</small>        
        <br>
    @enderror
    <br><br>
    <button type="submit">Actualizar información</button>
</form>
@endsection