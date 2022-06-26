@extends('layout.app')

@section('content')

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">{{$article->title}}</h1>
            <p class="lead">
                {{$article->body}}
            </p>
            <hr class="my-4">
            <span>{{$article->created_at->format('d.m.Y')}}</span>
            {{--            {{dd($comments)}}--}}
            {{--            @if($comments)--}}
            <ul class="list-group">
                @foreach($comments as $comment)
                    <li class="list-group-item">{{$comment->body}}</li>
                @endforeach

            </ul>
            {{--            @endif--}}
        </div>
    </div>
@endsection
