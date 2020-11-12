@extends('layouts.plantilla')

@section ('title','Contactanos')

@section('content')
<h1>Dejanos un Mensaje</h1>
{{-- se envia la información al store de la ruta --}}
<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    <br>
    @error('name')
    <p><strong>{{$message}}</strong></p>
    @enderror
    <br>
    <label>
        correo:
        <br>
        <input type="text" name="correo" value="{{old('correo')}}">
    </label>
    <br>
    @error('correo')
    <p><strong>{{$message}}</strong></p>
    @enderror
    <br>
    <label>
        mensaje:
        <br>
        <textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
    </label>
    <br>
    <button type="submit">Enviar Mensaje</button>
</form>
@if (session('info'))
<script>
    alert("{{session('info')}}")
</script>
@endif
@endsection
