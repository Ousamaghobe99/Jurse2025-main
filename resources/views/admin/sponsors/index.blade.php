@extends('layouts.app')

@section('title', 'Liste des Sponsors')

@section('content_header')
    <h1>Liste des Sponsors</h1>
@stop

@section('content')
    <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary mb-3">Ajouter un Sponsor</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>SLC</th>
            <th>Ordre</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sponsors as $sponsor)
            <tr>
                <td>{{ $sponsor->id }}</td>
                <td>{{ $sponsor->slc }}</td>
                <td>{{ $sponsor->order }}</td>
                <td>
                    <a href="{{ route('admin.sponsors.edit', $sponsor->id) }}" class="btn btn-xs btn-info">Éditer</a>
                    <form action="{{ route('admin.sponsors.delete', $sponsor->id) }}" method="POST"
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
