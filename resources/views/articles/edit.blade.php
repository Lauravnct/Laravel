@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('article.update', $article->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">

                            <input class=form-control" type="text" name="title" placeholder="Titre">

                            <textarea class="form-control" name="content" placeholder="Contenue"></textarea>
                            {{ $article->content }}
                            <input type="submit" value="Publier" clss="btn btn-info">
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
