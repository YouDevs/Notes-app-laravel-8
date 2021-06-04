@extends('layouts.base')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1>Editar nota</h1>
        <form action="{{route('notas.update', $note->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mt-4">
                <label>Título</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $note->title) }}">
            </div>
            <div class="form-group mt-4">
                <label>Contenido</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10">{{ old('content', $note->content) }}</textarea>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-sm btn-primary">Actualizar Nota</button>
            </div>
        </form>
    </div>
</div>
@endsection