@extends('layouts.app')

@section('title', 'Liste des Auteurs')

@section('content')
    <h1>Liste des Auteurs</h1>
    <a href="{{ route('admin.authors.create') }}" class="btn btn-primary mb-3">Ajouter un Auteur</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Organisme</th>
            <th>Session Spéciale</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->firstname }}</td>
                <td>{{ $author->lastname }}</td>
                <td>{{ $author->organism }}</td>
                <td>{{ $author->specialSession ? $author->specialSession->title : 'Aucune' }}</td>

                <td>
                    <a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-info">Éditer</a>
                    <form action="{{ route('admin.authors.delete', $author->id) }}" method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
