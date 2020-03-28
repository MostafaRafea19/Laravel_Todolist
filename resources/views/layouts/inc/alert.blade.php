@if($errors->any())
@foreach ($errors->all() as $error)
<section class="alert alert-danger">
    {{ $error }}
</section>
@endforeach
@endif

<section class="flash-message">
    @foreach (['danger', 'success', 'warning', 'info'] as $msg)
    @if (Session::has('alert-' . $msg))
    <section class="alert alert-{{ $msg }}">
        {{ Session::get('alert-' . $msg) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </section>
    @endif
    @endforeach
</section>
