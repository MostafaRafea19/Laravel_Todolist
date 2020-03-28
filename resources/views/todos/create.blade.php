@extends('layouts.app')

@section('content')
<h1>Create New Todo:</h1>
{!! Form::open(['action' => 'TodosController@store']) !!}
@include('todos._form')
@endsection
