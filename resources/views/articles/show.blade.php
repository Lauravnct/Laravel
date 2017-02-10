@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                        <h1> {{$article->content}}</h1>

                        <strong>{{ $article->user->name }}</strong>

                        <a href="{{ route('article.edit', $article->id) }}"
                           class="btn btn-primary">Modifier</a>

                            <form method="POST"
                                  action="{{ route('article.destroy', $article->id) }}"></form>

                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="DELETE">

                            <input class="btn btn-danger"
                                   type="submit"  value="Supprimer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection