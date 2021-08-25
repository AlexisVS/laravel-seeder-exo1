@extends("template.index")
@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->age }}</td>
                    <td class="d-flex">
                        <a href="/user/{{ $user->id }}" class="btn btn-success text-white mx-3" >SHOW</a>
                        <a href="/user/{{ $user->id }}/edit" class="btn btn-primary text-white mx-3" >EDIT</a>
                        <form action="/user/{{ $user->id }}/delete" method="POST">
                        @csrf
                        @method("DELETE")
                            <input class="btn btn-danger text-white" value="X" type="submit">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary text-white" href="/user/create">Create User</a>
    <form action="/user/delete-all" method="POST">
        @csrf
        @method("DELETE")
            <input class="btn btn-danger text-white" value="DELETE ALL" type="submit">
        </form>
@endsection
