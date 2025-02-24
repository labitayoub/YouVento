@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-warning text-white text-center">
                        <h4>Modifier le Club</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clubs.update', $Club) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Titre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $Club->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Contenu</label>
                                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $Club->description }}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                <a href="{{ route('clubs.index') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
