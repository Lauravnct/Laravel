@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @include('messages.errors')

                <div class="panel panel-default">
                    <div class="panel-heading">Publier un article</div>

                    <div class="panel-body">

                        <form action="{{ route('article.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="title" placeholder="Titre" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="content" placeholder="Votre contenu" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                Image : <input type="file" name="avatar">
                                <input type="submit" name="envoyer" value="Envoyer l'image">
                            </div>


                            <input type="submit" value="Publier" class="btn btn-info" >
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection