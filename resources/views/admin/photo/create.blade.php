@extends('layouts.app')

@section('title', 'Ajouter une Photo')

@section('content_header')
    <h1>Ajouter une Photo</h1>
@stop

@section('content')
    <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                   value="{{ old('title') }}" required>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="path">Chemin de la Photo :</label>
            <input type="file" class="form-control @error('path') is-invalid @enderror" id="path" name="path" required>
            @error('path')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order"
                   value="{{ old('order') }}" required>
            @error('order')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
