@extends('template.index')
@section('content')
    <form action="/user/{{ $user->id }}/update" method="POST">
      @csrf
      @method("PUT")
        <input type="text" value="{{ $user->nom }}" name="nom" id="">
        <input type="text" value="{{ $user->prenom }}" name="prenom" id="">
        <input type="text" value="{{ $user->age }}" name="age" id="">
        <input type="submit" value="Sauver">
    </form>
@endsection
