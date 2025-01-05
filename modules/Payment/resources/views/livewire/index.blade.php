<div>
    {{-- @slot('page_title', 'Payment Methods') --}}
    <x-themes.app.header class="bg-primary text-light">
        @slot('page_title', 'Payment Methods')
        @slot('back', '')
        @slot('right')
            <a class="headerButton" href="#">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">0</span>
            </a>

            <a class="headerButton" href="#">
                <img alt="image" class="imaged w32" src="{{ asset('assets/app') }}/img/sample/avatar/avatar1.jpg">
                <span class="badge badge-danger">0</span>
            </a>
        @endslot
    </x-themes.app.header>

    <div id="appCapsule">
        <x-alert />

        <div class="section mt-2">
            <nav class="navbar sticky-top navbar-expand-md bg-body-tertiary mb-2">
                <form class="d-flex col px-0 pe-1" role="search">
                    <input aria-label="Search" class="form-control me-2 rounded" placeholder="Search" type="search">
                </form>

                <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                    {{-- <span class="navbar-toggler-icon"></span> --}}
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

                <div class="navbar-collapse justify-content-end collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link button" data-bs-target="#payment" data-bs-toggle="modal" href="#">
                                <span data-bs-toggle="tooltip" title="Create">
                                    <ion-icon name="add-outline"></ion-icon>
                                    Add
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="transactions">
                @forelse ($payments ?? [] as $payment)
                    <a class="item" href="#" wire:key="{{ $payment->id }}">
                        <div class="detail">
                            <i class="fas fa-bank image-block imaged w48"></i>
                            <div>
                                <strong>
                                    <span data-bs-toggle="tooltip" title="First name">
                                        {{ $payment->details['account']['first_name'] ?? '' }}
                                    </span>
                                    <span data-bs-toggle="tooltip" title="Other name">
                                        {{ $payment->details['account']['other_name'] ?? '' }}
                                    </span>
                                    <span data-bs-toggle="tooltip" title="Last name">
                                        {{ $payment->details['account']['last_name'] ?? '' }}
                                    </span>
                                    @if ($payment->default)
                                        <span data-bs-toggle="tooltip" title="Default">
                                            <i aria-hidden="true" class="fa fa-check-circle"></i>
                                        </span>
                                    @endif
                                </strong>
                                <p>
                                    <span data-bs-toggle="tooltip" title="Bank name">
                                        {{ $payment->details['bank']['name'] ?? '' }}
                                    </span> &dash;
                                    <span data-bs-toggle="tooltip" title="Account number">
                                        {{ $payment->details['account']['number'] ?? '' }}
                                    </span>

                                    <span data-bs-toggle="tooltip" title="Payment method">
                                        ({{ $payment->method->name ?? '' }})
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="price text-muted">
                                <span data-bs-toggle="tooltip" title="Copy">
                                    <i aria-hidden="true" class="fa fa-copy"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <a class="item" data-bs-target="#payment" data-bs-toggle="modal" href="#">
                        <div class="detail">
                            <img alt="img" class="image-block imaged w48"
                                src="{{ asset('assets/app') }}/img/sample/brand/1.jpg">
                            <div>
                                <strong>No records found!</strong>
                                <p>Click to create a new payment method</p>
                            </div>
                        </div>

                        <div class="right">
                            <div class="price text-danger"></div>
                        </div>
                    </a>
                @endforelse
            </div>
        </div>
    </div>

    @pushonce('modals')
        <livewire:payment::create />
    @endpushonce
</div>
