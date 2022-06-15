@extends('layout.app')



@section('content')

    <ul class="list-group p-42 m-4">
        @foreach($data as $single_data)
            <li class="list-group-item">{{$single_data}}</li>

        @endforeach
    </ul>
@endsection
