@extends('layout.app')


@section('content')
    <div class="container">
        <h1>todos</h1>
        <ul class="list-group mt-4">
            @foreach($todos as $todo)
                <li class="list-group-item">{{$todo->title}}
                    @if($todo->status == 1)
                        <span class="badge badge-primary badge-pill"> выполнено</span>

                    @else
                        <span class="badge badge-danger badge-pill">не выполнено</span>

                    @endif

                </li>

            @endforeach
        </ul>
    </div>
@endsection
