<form action="{{ route('clubs.update', $club->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Titre:</label>
    <input type="text" name="title" id="title" value="{{ $club->title }}" required>
    
    <label for="content">Contenu:</label>
    <textarea name="content" id="content" required>{{ $club->content }}</textarea>
    
    <button type="submit">Mettre à jour</button>
</form>
