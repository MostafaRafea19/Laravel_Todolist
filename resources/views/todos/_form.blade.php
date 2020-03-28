{!! Form::token() !!}
<section class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', (isset($todo) ? $todo->title : null), ['class' => 'form-control']) !!}
</section>
<section class="form-group">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body', (isset($todo) ? $todo->body : null), ['class' => 'form-control']) !!}
</section>
<section class="form-group">
    {!! Form::label('date', 'Date') !!}
    {!! Form::date('date', (isset($todo) ? $todo->date : null), ['class' => 'form-control']) !!}
</section>
{!! Form::submit((isset($todo) ? 'Save' : 'Create') , ['class' => 'btn btn-primary']) !!}
<a href="{{ route('todo.index') }}" class="btn btn-dark">Cancel</a>
{!! Form::close() !!}
