@extends('layouts.app')

@section('title', 'Ajouter un Lien')

@section('content_header')
    <h1>Ajouter un Lien</h1>
@stop

@section('content')
    <form action="{{ route('admin.links.store') }}" method="POST">
        @csrf

        <x-form-group label="URL du Lien" for="href">
            <x-input type="text" id="href" name="href" :value="old('href')" required />
        </x-form-group>

        <x-button type="submit" class="btn-primary">Ajouter</x-button>
    </form>
@endsection

