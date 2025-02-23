@extends('layouts.app')

@section('content')
    <a href="{{ route('clubs.create') }}">Créer un clubs</a>
    @foreach ($clubs as $Club)
        <h2>{{ $Club->title }}</h2>
        <p>{{ $Club->content }}</p>
        <a href="{{ route('clubs.edit', $Club) }}">Modifier</a>
        <form action="{{ route('clubs.destroy', $Club) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    @endforeach
@endsection