@extends('layouts.base')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h1>Listado de notas</h1>
        <a href="{{route('notas.create')}}" class="btn btn-sm btn-info">Crear Nota</a>
        @foreach ($notes as $note)
        <div class="card my-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$note->title}}</h5>
                {{-- <p class="card-text">{{$note->content}}</p> --}}
                <a href="#" class="btn btn-primary">Ver Nota</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection