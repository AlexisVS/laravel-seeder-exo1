@extends("template.index")
@section("content")
<div class="container">
  <p><strong>Nom: </strong>{{ $show->nom }}</p>
  <p><strong>Prenom: </strong>{{ $show->prenom }}</p>
  <p><strong>Age: </strong>{{ $show->age }}</p>
</div>
@endsection