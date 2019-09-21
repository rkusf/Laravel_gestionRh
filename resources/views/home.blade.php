@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h2>Les sociétés</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">

                            <a href="http://127.0.0.1:8000/biodata" class="btn btn-primary btn-block" role="button">Providence Verte</a>
                            <a href="http://127.0.0.1:8000/biodata" class="btn btn-primary btn-block" role="button">SCA Louata</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Chlihat 1</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Chlihat 2</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Elbaraka 1</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Elbaraka 2</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">Domaine Loudaya</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Kouacem</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Allied Potato</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Kedima</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Outita latic</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Bausijour</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">T.Vally</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Domaine du lac</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Sidi Abdelaziz 1</a>
                            <a href="#" class="btn btn-primary btn-block" role="button">SCA Sidi Abdelaziz 2</a>


                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
