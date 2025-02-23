@foreach ($clubs as $club)
    <h2>{{ $club->title }}</h2>
    <p>{{ $club->content }}</p>
    <a href="{{ route('posts.show', $club->id) }}">Voir</a>
    <a href="{{ route('posts.edit', $club->id) }}">Éditer</a>
    <form action="{{ route('posts.destroy', $club->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endforeach
