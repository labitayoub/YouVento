@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Ajouter un Club</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clubs.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Titre</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Titre du club" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Contenu</label>
                                <textarea name="description" id="description" class="form-control" placeholder="Description du club" rows="4" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
