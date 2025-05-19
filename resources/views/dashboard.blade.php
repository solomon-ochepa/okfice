<x-layouts.app>
    @slot('title', 'Dashboard')
    <x-layouts.app.sections.header class="bg-primary text-light">
        @slot('title', config('app.name'))
        @slot('links')
            <x-user::header.links />
        @endslot
    </x-layouts.app.sections.header>

    <div id="appCapsule">
        ... welcome to {{ config('app.name') }}
    </div>
</x-layouts.app>
