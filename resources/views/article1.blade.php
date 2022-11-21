@foreach($articles as $thing)

@extends("layouts.app")

@section("title", $thing->name)

@section("content")

    <div class="Content">
        <div class="Row">

            <div class="threeColumnMiddle">
                {{$thing->text}}

                <img src="https://media.istockphoto.com/photos/gardening-picture-id511728118?k=6&m=511728118&s=170667a&w=0&h=uooXrlwk32sBoS3ZN3H_OwAeJeFrLYxBwHSHdevxGsI=" alt="Stock" class="Responsive">
            </div>

            <div class="ThreeColumnSide">
                <table>
                    @foreach ($comments as $item)
                        <tr>
                            <td><b>Používateľ:</b> {{$item->name}}<br>
                                <b>Komentár:</b> {{$item->text}}<br>
                            </td>
                        </tr>
                    @endforeach
                </table>

                @auth

                    <button id="button">Komentuj</button> <br><br>

                    <form action="{{route('comment')}}" method="post" class = "Comments" id="form" style="visibility: hidden;">
                        @csrf
                        <div class = "form-group">
                            <label>Komentujúci</label> <br>
                            <input name="name" class = "form-control" type = "text" value = {{Auth::user()->name}} readonly><br>
                            <label>Koment</label> <br>
                            <input name="text" class = "form-control" type = "text"><br>
                            <input name="id" class = "form-control" type = "hidden" value = {{$thing->id}}>
                        </div>
                        <button onclick="conductWarning()" type = "submit">Potvrdiť</button><br><br>

                    </form>


                    <script>

                        const btn = document.getElementById('button');
                        btn.addEventListener('click', () => {

                            const form = document.getElementById('form');

                            if (form.style.visibility === 'hidden') {
                                form.style.visibility = 'visible';
                                alert("Nevhodné komentáre môžu byť zmazané!");
                            } else {
                                form.style.visibility = 'hidden';
                            }
                        });

                    </script>
                @endauth
            </div>



        </div>
    </div>

    <div class="Footer">
        Článok od {{$thing->article}}
    </div>

@endsection

@endforeach
