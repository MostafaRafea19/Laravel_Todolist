@extends('layouts.app');

@section('content')
<section class="card">
    <section class="card-body">
        <h1>{{ $todo->title }}</h1>
        <p>{{ $todo->body }}</p>
    </section>
</section>
@endsection
