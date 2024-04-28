@extends('layouts.app')

@section('title', 'Éditer Organisateur')

@section('content_header')
    <h1>Éditer Organisateur</h1>
@stop

@section('content')
    <form action="{{ route('admin.organizers.update', $organizer->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="slc">SLC :</label>
            <input type="text" class="form-control" id="slc" name="slc" value="{{ $organizer->slc }}" required>
        </div>
        <div class="form-group">
            <label for="order">Ordre :</label>
            <input type="number" class="form-control" id="order" name="order" value="{{ $organizer->order }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
