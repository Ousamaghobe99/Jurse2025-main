@extends('layouts.app')

@section('title', 'Ajouter une Session Spéciale')

@section('content')
    <h1>Ajouter une Session Spéciale</h1>
    <form action="{{ route('admin.specialsessions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control" id="order" name="order">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
