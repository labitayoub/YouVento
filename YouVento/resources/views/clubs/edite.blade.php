@extends('layouts.app')

@section('content')
    <form action="{{ route('clubs.update', $Club) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="title" value="{{ $Club->title }}">
        <textarea name="content">{{ $Club->content }}</textarea>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection