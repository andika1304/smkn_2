{{-- untuk menampilkan pesan success --}}
@if (session(['success']))
<div class="alert alert-success">
    {{session('success')}}
</div>

@endif

{{-- untuk menampilkan pesan errors --}}
@if (session('errors'))
<div class="alert alert-danger">
    {{ session('errors')->First() }}
</div>

@endif
