@extends('layouts.app')

@section('title', 'Ajouter un Tweet')

@section('content_header')
    <h1>Ajouter un Tweet</h1>
@stop

@section('content')
    <form action="{{ route('admin.tweets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="link">Lien :</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="date_tweet">Date du Tweet :</label>
            <input type="date" class="form-control" id="date_tweet" name="date_tweet">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
