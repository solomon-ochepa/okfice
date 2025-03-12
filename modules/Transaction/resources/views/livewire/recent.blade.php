<div class="section my-4">
    <div class="section-heading">
        <h2 class="title">Transactions</h2>
        <a class="link" href="{{ route('transactions.index') }}">View All</a>
    </div>

    <div class="transactions">
        @forelse ($transactions ?? [] as $transaction)
            <a class="item" href="#">
                <div class="detail">
                    <img alt="img" class="image-block imaged w48"
                        src="{{ asset('assets/app') }}/img/sample/brand/1.jpg">
                    <div>
                        <strong>{{ $transaction->type }}</strong>
                        <p>{{ $transaction->description }}</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> {{ $transaction->amount }}</div>
                </div>
            </a>
        @empty
            <a class="item" href="#">
                <div class="detail py-4">
                    {{-- <img alt="img" class="image-block imaged w48"
                        src="{{ asset('assets/app') }}/img/sample/brand/1.jpg" /> --}}

                    <div>
                        <strong>No records found!</strong>
                        {{-- <p>Shopping</p> --}}
                    </div>
                </div>
                {{-- <div class="right">
                    <div class="price text-danger"> - N 150</div>
                </div> --}}
            </a>
        @endforelse
    </div>
</div>
