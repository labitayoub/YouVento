@foreach ($clubs as $club)
    <h2>{{ $club->title }}</h2>
    <p>{{ $club->content }}</p>
    <a href="{{ route('clubs.show', $club->id) }}">Voir</a>
    <a href="{{ route('clubs.edit', $club->id) }}">Éditer</a>
    <form action="{{ route('clubs.destroy', $club->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endforeach
