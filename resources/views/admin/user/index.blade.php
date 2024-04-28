@extends('layouts.app')

@section('title', 'Liste des Utilisateurs')

@section('content_header')
    <h1>Liste des Utilisateurs</h1>
@stop

@section('content')
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-3">Ajouter un Utilisateur</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <!-- Ajoutez d'autres colonnes si nécessaire -->
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <!-- Autres champs -->
                <td>
                    <a href="{{ route('admin.user.edit', $user->id) }}"
                       class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST"
                          style="display:inline;">
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
