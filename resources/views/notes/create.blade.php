@extends('layouts.base')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h1>Crear nueva nota</h1>
        <form action="{{route('notas.store')}}" method="post">
            @csrf
            <div class="form-group mt-4">
                <label>Título</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group mt-4">
                <label>Contenido</label>
                <input type="text" name="content" class="form-control" value="{{ old('content') }}">
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-sm btn-primary">Crear Nota</button>
            </div>
        </form>
    </div>
</div>
@endsection