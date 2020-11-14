@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="text-success">{{ $game->name }}</h3>

    <x-card>
        <div class="row">
            <div class="col-md-8">
                <p>Descripción</p>
                <p>{{ $game->description }}</p>
            </div>    
            <div class="col-md-4 d-flex justify-content-end">
                <img src="{{ $game->url_image }}"></img>
            </div> 
            <div class="col-md-12">
                <a href="{{ $game->url }}">{{ $game->url }}</a>
            </div>  
        </div> 
        <div class="card-footer bg-transparent border-success text-center">
            <a class="btn btn-md btn-success" href="{{ route('game.edit',$game->id) }}">
                Editar registro
            </a>
            <a class="btn btn-md btn-danger text-white"
                onclick="event.preventDefault(); 
                document.getElementById('delete-{{ $game->id }}').submit();">
                Borrar registro
            </a>
            <form 
                id="delete-{{ $game->id }}" 
                action="{{ route('game.delete', $game->id) }}" 
                method="POST" style="display: none;">
                @method('delete')
                @csrf
            </form>
        </div>
    </x-card>
    <div class="text-center p-4">
        <a class="btn btn-lg btn-info text-white" href="{{ URL::previous() }}"> Volver</a>   
    </div>
</div>

@endsection