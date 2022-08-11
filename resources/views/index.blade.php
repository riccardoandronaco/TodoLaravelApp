@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                <a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a>
                @endforeach
            </ul>
        </div>
    </div>

@endsection