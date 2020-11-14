@extends('layouts.app')

@section('content')

<div class="container">
    <x-card>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 class="p-3 bg-info">Registro del juego </h3>
        <form action="{{ route('game.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nombre del juego</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            placeholder="juegos" 
                            name="name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Url imagen del juego</label>
                        <input 
                            type="text" 
                            name="url_image" 
                            id="url_image" 
                            class="form-control" 
                            placeholder="https://ejemplo.jpg"
                            value="{{ old('url_image') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Estado de la publicación</label>
                        <select class="form-control" id="status" name="status">
                            <option disabled selected>Seleccionar</option>
                            @foreach ($status as $item)
                                <option value="{{ $item['value'] }}"
                                {{ old('status') == $item['value'] ? 'selected=true' : '' }}>
                                    {{ __($item['text']) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="url">Url del juego</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="url" 
                            placeholder="https://ejemplo.com" 
                            name="url"
                            value="{{ old('url') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Descripción del juego</label>
                        <textarea 
                            class="form-control" 
                            id="description" 
                            rows="3" 
                            name="description">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-md btn-info text-white" href="{{ route('game.index') }}"> Volver</a>
        </form>
    </x-card>
</div>
@endsection