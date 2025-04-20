<div class="search-box w-100">
    <form class="form" wire:submit="query">
        <input aria-label="Search" class="form-control search-input search" placeholder="Search ..." type="search"
            wire:model.live.delay="search" />
        {{-- <i class="fas fa-search search-box-icon" wire:loading.class="fa-spinner"></i> --}}
    </form>
</div>
