@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Lista de Juegos</h3>
    <div class="row">
        @forelse ($games as $game)            
            <div class="col-md-4">
                <div class="card mb-3">
                    <a href="{{ $game->url }}">
                        <div class="card-body p-0">
                            <img src="{{ $game->url_image }}" class="card-img" alt="...">
                        </div>
                    </a>
                    <div class="card-footer text-center">
                        <a class="btn btn-md btn-success" href="{{ route('game.show',$game->id) }}">
                            Ver detalle del juego
                        </a>
                    </div>
                </div>                    
            </div>
            @empty
                <h4>No exiten juegos :(</h4>
            @endforelse
    </div> 
</div>

@endsection