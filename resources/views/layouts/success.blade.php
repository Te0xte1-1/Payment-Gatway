@if (session()->has('success'))
<span class="alert alert-success">
    {{ session()->get('success') }}
</span>

@endif