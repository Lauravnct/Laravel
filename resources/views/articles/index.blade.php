@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('messages.success')
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <h1>Liste des taches</h1>
                    <ul>
                        @forelse ($articles as $article)
                            <li><a href="{{ route('article.show', $article->id) }}"> {{$article->content}}</a></li>
                        @empty
                            <li>Aucune tâche</li>
                        @endforelse
                    </ul>
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection