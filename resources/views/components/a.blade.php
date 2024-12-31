@php $attributes->has('route') ? $attributes['href'] = route($attributes->get('route')) : null; @endphp
@if ($attributes->has('route') ? Route::has($attributes->get('route')) : true)
    <a
        {{ $attributes->merge(['class' => 'item'])->class(['active' => request()->routeIs($attributes->get('route'))]) }}>
        {{ $slot }}
    </a>
@endif
