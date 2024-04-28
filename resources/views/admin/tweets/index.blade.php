@extends('layouts.app')

@section('title', 'Liste des Tweets')

@section('content_header')
    <h1>Liste des Tweets</h1>
@stop

@section('content')
    <a href="{{ route('admin.tweets.create') }}" class="btn btn-primary mb-3">Ajouter un nouveau tweet</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Lien</th>
            <th>Date du Tweet</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tweets as $tweet)
            <tr>
                <td>{{ $tweet->id }}</td>
                <td>{{ $tweet->name }}</td>
                <td>{{ $tweet->link }}</td>
                <td>{{ $tweet->date_tweet }}</td>
                <td>
                    <a href="{{ route('admin.tweets.edit', $tweet->id) }}" class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.tweets.delete', $tweet->id) }}" method="POST" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-xs btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
