@extends('layouts.plantilla')
    
@section('title', 'Cursos edit')

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf
        @method('put')

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
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
            <textarea name="description" cols="30" rows="5">{{ old('description', $curso->description) }}</textarea>
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
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        
        @error('categoria')
        <br>
            <small>*{{ $message }}</small>
        <br>
        @enderror
        
        <br><br>
        <button type="submit">actualizar formulario</button>
    </form>

@endsection