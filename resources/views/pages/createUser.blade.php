@extends("template.index")
@section('content')
    <form action="/user/store" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">
        <label for="age">Age</label>
        <input type="text" name="age">
        <input type="submit" value="Envoyer" name="nom">
    </form>
@endsection
