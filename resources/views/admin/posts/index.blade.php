@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold">Pagina Principale</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.posts.show', $post)}}">Mostra</a>
                            <a class="btn btn-warning" href="#">Modifica</a>
                            <a class="btn btn-danger" href="#">Cancella</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

          </table>
    </div>
@endsection
