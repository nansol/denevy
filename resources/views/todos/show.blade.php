@extends('layouts.app')

@section('content')
<a class="btn btn-link" href="/">Go Back</a>

<div class="container">
    <ul class="list-group">
        <li class="list-group-item"> <h1> {{$todo->text}} </h1>
        <div class="badge badge-pill badge-danger">{{$todo->due}}</div>
        <hr>
        <p>{{$todo->body}}</p>
        </li>
    </ul>
</div>
<div class="container">
<div class="row">
    <div class="col-2 align-self-start">
        <a class="btn btn-secondary"  href="/todo/{{$todo->id}}/edit ">Edit</a>
    </div>
    @if(Auth::user()->id == $todo-$id)
    <div class="col-2 align-self-end">
        <form action="{{action('TodosController@destroy', [$todo->id])}}" method="POST">
                <?= csrf_field() ?>
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    @endif
</div>

</div>

@endsection



