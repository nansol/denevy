@extends('layouts.app')

@section('content')

<h1>Create To Do</h1>

<form action="{{action('TodosController@store')}}" method="POST">

    <?= csrf_field() ?>


    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="name" placeholder="Name" name="text">
    </div>
    <div class="form-group">
        <label for="message">Task</label>
        <textarea class="form-control " id="message" rows="5" placeholder="Enter Your Task" name="body"></textarea>
    </div>
    <div class="form-group">
        <label for="Email">Due Date</label>
        <input type="text" class="form-control" id="due" placeholder="Add due date" name="due">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
