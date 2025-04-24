@props(['title' => null, 'back' => null, 'links' => null])
<div {{ $attributes->merge(['class' => 'appHeader']) }}>
    <div class="left">
        @isset($back)
            <a class="headerButton goBack" href="{{ empty($back) ? route('dashboard') : route($back) }}">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        @else
            <a class="headerButton" data-bs-target="#sidebarPanel" data-bs-toggle="modal" href="#">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        @endisset
    </div>

    @if ($title)
        <div class="pageTitle">
            {!! $title ?? null !!}
        </div>
    @endif

    @if ($links)
        <div class="right">
            {{ $links ?? null }}
        </div>
    @endif
</div>
