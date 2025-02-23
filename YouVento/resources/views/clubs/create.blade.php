@extends('layouts.app')

@section('content')
    <form action="{{ route('clubs.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content" placeholder="Contenu"></textarea>
        <button type="submit">Ajouter</button>
    </form>
@endsection