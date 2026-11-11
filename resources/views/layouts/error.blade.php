
@if (session()->has('error'))
<span class="alert alert-danger">
    {{ session()->get('error') }}
</span>

@endif