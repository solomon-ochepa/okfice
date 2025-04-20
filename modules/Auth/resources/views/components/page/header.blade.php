@props(['title', 'description'])
<div class="section mt-2 text-center">
    <h1>{{ $title }}</h1>
    <h4>{{ $description }}</h4>

    <x-alert />
</div>
