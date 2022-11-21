@extends("layouts.app")

@section("title", "Údaje profilu")

@section("content")

    <table>
        <tr>
            <th>Meno</th>
            <td>{{Auth::user()->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{Auth::user()->email}}</td>
        </tr>
        <tr>
            <th>Vymazať účet</th>
            <td></td>
        </tr>
        <tr>
            <td><a href="edit/{{Auth::user()->id}}">Edit</a></td>
            <td><a href="delete/{{Auth::user()->id}}">Vymaž</a></td>
        </tr>
    </table>

    <div class="Footer">
        Writing something in it
    </div>


@endsection
