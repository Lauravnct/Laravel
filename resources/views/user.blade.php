@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profil</div>
                    <div class="panel-body">
                        @if(Auth::check())
                            <ul>
                                <li>Nom: {{Auth::user()->name}}</li>
                                <li>Email: {{Auth::user()->email}}</li>
                            </ul>
                            <ul>
                                @foreach($articles=Auth::user()->articles as $article)
                                    <li>{{$article->content}}</li>
                                @endforeach
                            </ul>
                            Vous etes bien connecté!
                        @else
                            Vous n'estes pas connecté!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
