@extends('layouts/app')

@section('content')

    <h1>Todos</h1>

    @if(count($todos) > 0 )
        @foreach($todos as $todo)
        <div class="card mb-3" style="">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted btn btn-light">{{$todo->due}}</h6>                
            </div>
        </div>
        @endforeach
    @endif

@endsection