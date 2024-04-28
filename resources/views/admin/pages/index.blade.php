@extends('layouts.app')

@section('title', 'Liste des Pages')

@section('content_header')
    <h1>Liste des Pages</h1>
@stop

@section('content')
    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary mb-3">Ajouter une nouvelle page</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->name }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.pages.delete', $page->id) }}" method="POST" style="display:inline;">
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
