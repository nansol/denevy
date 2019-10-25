@extends('layouts.app')

@section('content')
    @if(count($todos) > 0)
        @foreach ($todos as $todo)
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item"> <h3><a href="todo/{{$todo->id}}"> {{$todo->text}} </h3><span class="badge badge-pill badge-danger">{{$todo->due}}</span></li>
        </ul>
    </div>
        @endforeach
    @endif
@endsection









