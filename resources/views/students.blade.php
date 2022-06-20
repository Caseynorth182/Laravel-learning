@extends('layout.app');


@section('content')
    <div class="container">
        <h1>Students</h1>
        <ul class="list-group mt-4">
            @foreach($students as $student)
                <li>{{$student->first_name}}</li>
            @endforeach
        </ul>
    </div>
@endsection

