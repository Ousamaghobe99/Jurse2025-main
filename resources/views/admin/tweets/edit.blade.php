@extends('layouts.app')

@section('title', 'Éditer Tweet')

@section('content_header')
    <h1>Éditer Tweet</h1>
@stop

@section('content')
    <form action="{{ route('admin.tweets.update', $tweet->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $tweet->name }}" required>
        </div>
        <div class="form-group">
            <label for="link">Lien :</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ $tweet->link }}">
        </div>
        <div class="form-group">
            <label for="date_tweet">Date du Tweet :</label>
            <input type="date" class="form-control" id="date_tweet" name="date_tweet" value="{{ $tweet->date_tweet }}">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
