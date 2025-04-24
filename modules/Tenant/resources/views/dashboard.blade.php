<x-tenancy::layouts.app>
    @slot('title', 'Dashboard')
    <x-layouts.app.sections.header class="bg-primary text-light">
        @slot('title', config('app.name'))
        @slot('right')
            <a class="headerButton" href="#">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                {{-- <span class="badge badge-danger">0</span> --}}
            </a>
            <a class="headerButton" href="#">
                <img alt="image" class="imaged w32" src="{{ asset('assets/app') }}/img/sample/avatar/avatar1.jpg">
                {{-- <span class="badge badge-danger">0</span> --}}
            </a>
        @endslot
    </x-layouts.app.sections.header>

    <div id="appCapsule">
        <!-- Wallet Card -->
        <livewire:account::wallet />

        <!-- Transactions -->
        <livewire:transaction::recent />

        <!-- Stats -->
        <livewire:account::stats />

        Client: {{ tenant('name') }}
    </div>
</x-tenancy::layouts.app>
