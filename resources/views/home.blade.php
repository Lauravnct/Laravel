@extends('layouts.app')

<style>

   body {
        background-color: black;
        color: white;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                       Vous êtes connecté !

                        @if(Auth::check())
                            Bonjour {{ Auth::user()->name }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
