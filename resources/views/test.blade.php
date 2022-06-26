@extends('layout.app')

@section('content')
    <div class="jumbotron mt-4">
        <h1 class="display-4">articles</h1>
        @foreach($articles as $artical)
            <div class="list-group">
                <a href="/article/{{$artical->id}}"
                   class="list-group-item list-group-item-action flex-column align-items-start ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$artical->title}}</h5>
                        <small>{{$artical->created_at->format('d.m.Y')}}</small>
                    </div>
                    <p class="mb-1">
                        {{$artical->body}}
                    </p>

                </a>

            </div>
        @endforeach
    </div>
@endsection
