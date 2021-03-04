@extends('template.main')
@section('content')
    <div class="container">
        <form action="genres" method="POST">
            @csrf
            <label for="">Genre: </label>
            <input type="text" name="genre" class="form-control">
            <button class="btn btn-warning" type="submit">Ajouter</button>
        </form>
    </div>
@endsection