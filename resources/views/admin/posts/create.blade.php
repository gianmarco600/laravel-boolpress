@extends('layouts.app')

@section('content')

<form action="{{route("admin.posts.store")}}" method="POST">

    @csrf

    <div class="my-4">
        <label for="title" class="form-label">titolo:</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="my4">
        <label for="description">descrizione:</label>
        <textarea name="desription" id="description" class="form-control" rows="10"></textarea>
    </div>

    <div class="mt-3">

        <a href="{{route("admin.posts.index")}}" class="btn btn-light">indietro</a>
        <button type="submit" class="btn btn-success">aggiungi post</button>
    </div>
        

</form>

@endsection