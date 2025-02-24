@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Liste des Clubs</h1>
            <a href="{{ route('clubs.create') }}" class="btn btn-success">Créer un club</a>
        </div>

        @foreach ($clubs as $Club)
            <div class="card mb-3 shadow">
                <div class="card-body">
                    <h4 class="card-title">{{ $Club->name }}</h4>
                    <p class="card-text">{{ $Club->description }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('clubs.edit', $Club) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('clubs.destroy', $Club) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce club ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        @if ($clubs->isEmpty())
            <div class="alert alert-info text-center">Aucun club disponible.</div>
        @endif
    </div>
@endsection
