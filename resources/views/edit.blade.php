@extends("layouts.app")

@section("title", "Edit údajov")

@section("content")

    <div>

        <form action="{{route('update')}}" method="post">
            @csrf
            <input type="hidden" name="cid" value="{{ $Info->id }}">
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" value="{{ $Info->name }}"/>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input name="email" value="{{ $Info->email }}"/>
            </div>

            <div class="form-group">
                <button type="submit">Update</button>
            </div>
        </form>

    </div>

@endsection
