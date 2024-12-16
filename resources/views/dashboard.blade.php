<x-app-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <livewire:account::widgets.wallet-card />

        <!-- Transactions -->
        <livewire:transaction::recent />

        <!-- Stats -->
        <livewire:account::widgets.stats />
    </div>
</x-app-layout>
