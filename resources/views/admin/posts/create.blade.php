@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea un nuovo post</h1>

        <form action="{{route('admin.posts.store')}}}" method=POST>
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Titolo</label>
                {{-- il name dell'input deve risultare al nome della colonna della tabella di riferimento --}}
                <input  value="{{old("title")}}"
                        type="text"
                        id="title"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="Inserisci il titolo del comic">
                        @error('title')
                            <p class="error-msg fw-bold">{{$message}}</p>
                        @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label fw-bold">Contenuto del post</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success fw-bold">Invia</button>

        </form>
    </div>
@endsection
