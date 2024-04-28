@extends('layouts.app')

@section('title', 'Modifier une Vidéo')

@section('content_header')
    <h1>Modifier une Vidéo</h1>
@stop

@section('content')
    <form action="{{ route('admin.videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre :</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                   value="{{ old('title', $video->title) }}" required>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Type de Vidéo :</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                <option value="">Sélectionner un type</option>
                <option value="link" {{ $video->type == 'link' ? 'selected' : '' }}>Lien</option>
                <option value="upload" {{ $video->type == 'upload' ? 'selected' : '' }}>Téléverser</option>
            </select>
            @error('type')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" id="vpath-input" style="display: none;">
            <label for="vpath">Lien de la Vidéo :</label>
            <input type="url" class="form-control @error('vpath') is-invalid @enderror" id="vpath" name="vpath"
                   value="{{ old('vpath', $video->vpath) }}">
            @error('vpath')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" id="upload-input" style="display: none;">
            <label for="video_file">Fichier Vidéo :</label>
            <input type="file" class="form-control @error('video_file') is-invalid @enderror" id="video_file"
                   name="video_file">
            @error('video_file')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order"
                   value="{{ old('order', $video->order) }}">
            @error('order')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <script>
        function handleTypeChange() {
            var value = document.getElementById('type').value;
            var linkDiv = document.getElementById('vpath-input');
            var uploadDiv = document.getElementById('upload-input');
            var linkInput = document.getElementById('vpath');
            var uploadInput = document.getElementById('video_file');
            linkDiv.style.display = value === 'link' ? 'block' : 'none';
            uploadDiv.style.display = value === 'upload' ? 'block' : 'none';
            linkInput.required = false;
            uploadInput.required = false;

            if (value === 'link') {
                linkInput.required = true;
            } else if (value === 'upload') {
                uploadInput.required = true;
            }
        }

        document.getElementById('type').addEventListener('change', handleTypeChange);

        // Appeler la fonction handleTypeChange au chargement pour initialiser l'affichage correct
        window.onload = handleTypeChange;
    </script>
@endsection
