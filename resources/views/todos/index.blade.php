@extends('layouts.app')

@section('content')
<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(count($todos) > 0)
        @foreach ($todos as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->title}}</td>
            <td>{{$todo->date}}</td>
            <td>
                <a href="{{ route('todo.show', $todo) }}" class="btn btn-primary">Show</a>
                <a href="{{ route('todo.edit', $todo) }}" class="btn btn-success">Edit</a>
                {!! Form::open(['action' => ['TodosController@destroy', $todo], 'method' => 'delete', 'class' =>
                'd-inline']) !!}
                {!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        @endif
        @endsection
    </tbody>
</table>
