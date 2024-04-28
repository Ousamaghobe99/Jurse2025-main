@extends('layouts.app')

@section('title', 'Liste des Sessions Spéciales')

@section('content')
    <h1>Liste des Sessions Spéciales</h1>
    <a href="{{ route('admin.specialsessions.create') }}" class="btn btn-primary mb-3">Ajouter une Session Spéciale</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Ordre</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($specialSessions as $session)
            <tr>
                <td>{{ $session->id }}</td>
                <td>{{ $session->title }}</td>
                <td>{{ $session->description }}</td>
                <td>{{ $session->order }}</td>
                <td>
                    <a href="{{ route('admin.specialsessions.edit', $session->id) }}" class="btn btn-info">Éditer</a>
                    <form action="{{ route('admin.specialsessions.delete', $session->id) }}" method="POST"
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
