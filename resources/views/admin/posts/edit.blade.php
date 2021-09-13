@extends('layouts.app')

@section('content')

    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
    @csrf

    @method('PUT')

    <div class="my-4">
        <label for="title" class="form-label">titolo:</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
    </div>
    <div class="my-4">
        <label for="description" class="form-label">descrizione:</label>
        <textarea name="description" class="form-control" id="description"  rows="6">{{$post->description}}</textarea>
    </div>
    <a href="{{route('admin.posts.index')}}" class="btn btn-light">Torna indietro</a>
      <button type="submit" class="btn btn-primary">salva modifiche</button>
    </form>
    
@endsection