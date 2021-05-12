@extends('layouts.plantilla')
    
@section('title', 'Create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    
    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        
        @error('name')
        <br>
            <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="5">{{old('description')}}</textarea>
        </label>
        
        @error('description')
        <br>
            <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        
        @error('categoria')
        <br>
            <small>*{{ $message }}</small>
        <br>
        @enderror
        
        <br><br>
        <button type="submit">Enviar formulario</button>
    </form>

@endsection