@extends('layouts.app')

@section('title', 'Éditer Lien')

@section('content_header')
    <h1>Éditer Lien</h1>
@stop

@section('content')
    <form action="{{ route('admin.links.update', $link->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="href">URL du Lien :</label>
            <input type="text" class="form-control" id="href" name="href" value="{{ $link->href }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
