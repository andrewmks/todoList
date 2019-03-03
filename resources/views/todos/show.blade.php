@extends('layouts.app')

@section('content')
    <a class="btn btn-primary mb-3" href="/">Back</a>
    <div class="card mb-3" style="">
        <div class="card-body">
            <h5 class="card-title">
                <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted btn btn-light">{{$todo->due}}</h6> 
            <p class="card-text">{{$todo->body}}</p>               
        </div>
    </div>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary pull-left">Edit</a>
<div>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger pull-right'])}}
    {!! Form::close() !!}
</div>

@endsection