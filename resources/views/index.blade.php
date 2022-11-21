@extends("layouts.app")

@section("title", "Index")

@section("content")

    <div class="Content" style="overflow-x:auto;">
        <table>
            <tr>
                <th>Meno článku</th>
                <th>Autor</th>
                <th>Link</th>
            </tr>
            @foreach ($articles as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->article}}</td>
                    <td><a href="article{{$item->id}}">Prečítať</a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="Footer">
        Writing something in it
    </div>

@endsection
