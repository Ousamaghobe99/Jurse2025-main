@extends('layouts.app')

@section('title', 'Éditer Session Spéciale')

@section('content')
    <h1>Éditer Session Spéciale</h1>
    <form action="{{ route('admin.specialsessions.update', $session->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $session->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description">{{ $session->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control" id="order" name="order" value="{{ $session->order }}">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
