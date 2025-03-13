<div class="appBottomMenu">
    <x-a route="dashboard">
        <div class="col">
            <ion-icon name="home"></ion-icon>
            <strong>Dashboard</strong>
        </div>
    </x-a>

    @can('admin.users.index')
        <x-a route="admin.user.index">
            <div class="col">
                <ion-icon name="people"></ion-icon>
                <strong>Users</strong>
            </div>
        </x-a>
    @endcan

    @can('admin.transactions.index')
        <x-a route="admin.transactions.index">
            <div class="col">
                <ion-icon name="people"></ion-icon>
                <strong>Transactions</strong>
            </div>
        </x-a>
    @endcan

    <x-a route="settings">
        <div class="col">
            <ion-icon name="settings-outline"></ion-icon>
            <strong>Settings</strong>
        </div>
    </x-a>
</div>
