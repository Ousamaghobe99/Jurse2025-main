@extends('layouts.app')

@section('title', 'Liste des Photos')

@section('content_header')
    <h1>Liste des Photos</h1>
@stop

@section('content')
    <a href="{{ route('admin.photos.create') }}" class="btn btn-primary mb-3">Ajouter une nouvelle photo</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Chemin</th>
            <th>Ordre</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>
                <td>{{ $photo->id }}</td>
                <td>{{ $photo->title }}</td>
                <td>{{ $photo->path }}</td>
                <td>{{ $photo->order }}</td>
                <td>
                    <a href="{{ route('admin.photos.edit', $photo->id) }}" class="btn btn-info">Éditer</a>
                    <form action="{{ route('admin.photos.delete', $photo->id) }}" method="POST" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
