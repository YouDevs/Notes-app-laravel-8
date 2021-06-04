@extends('layouts.base')

@section('content')
<div class="row justify-content-center my-4">
    <div class="col-md-6">
        <h1>{{$note->title}}</h1>
        <div class="card my-4">
            <div class="card-body">
                <p class="card-text">{{$note->content}}</p>
                <a href="{{route('notas.edit', $note)}}" class="btn btn-sm btn-info">Editar Nota</a>
            </div>
        </div>
    </div>
</div>
@endsection