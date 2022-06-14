@extends('layout.app')


@section('content')
    <div class="jumbotron mt-4">
        <h1 class="display-4">{{$name}}</h1>
        <ul class="list-group p-2 m-4">
            @foreach($my_skills as $skill)
                <li class="list-group-item">{{$skill}}</li>
            @endforeach

        </ul>
    </div>
@endsection
