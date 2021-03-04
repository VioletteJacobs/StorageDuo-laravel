@extends('template.main')
@section('content')
<div class="container">
    <form action="membres" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Photo:</label>
        <input type="file" name="src">
        <label for="">Nom:</label>
        <input type="text" name="nom">
        <label for="">Genre:</label>
        {{-- <input type="text" name="genre"> --}}
        <select id="" name="genre">
            @foreach ($DBGenre as $item)
            <option value="{{$item->genre}}" >{{$item->genre}}</option>
            @endforeach
        </select>
        <label for="">Age:</label>
        <input type="text" name="age">
        <button class='btn btn-success'>Validate</button>
    </form>
</div>
    
@endsection