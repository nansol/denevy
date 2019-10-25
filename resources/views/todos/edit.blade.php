@extends('layouts.app')

@section('content')
<a class="btn btn-link" href="/todo/{{$todo->id}}">Go Back</a>

<h1>Edit</h1>

<form action="{{action('TodosController@update', [$todo->id])}}" method="POST" >

    <?= csrf_field() ?>
    @method("PUT")


    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="text" value="{{old('text', $todo->text) }}">
    </div>
    <div class="form-group">
        <label for="message">Task</label>
        <textarea class="form-control " id="message" rows="5" placeholder="Enter Your Task" name="body" value="{{old('body', $todo->body)}}"></textarea>
    </div>
    <div class="form-group">
        <label for="Email">Due Date</label>
        <input type="text" class="form-control" id="due" placeholder="Add due date" name="due" value="{{ old('due', $todo->due) }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
