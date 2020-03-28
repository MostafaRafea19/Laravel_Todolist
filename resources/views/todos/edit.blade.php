@extends('layouts.app')

@section('content')
<h1>Update Todo</h1>
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'put']) !!}
@include('todos._form')
@endsection
