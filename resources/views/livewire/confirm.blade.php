<div aria-hidden="true" aria-labelledby="confirm-label" class="modal fade" data-bs-backdrop="static" id="confirm"
    role="dialog" tabindex="-1" wire:ignore.self x-data>
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mb-4 text-center">
                    @if ($data['icon'] ?? '')
                        <div class="mb-2">
                            {!! $data['icon'] !!}
                        </div>
                    @endif

                    <h3 class="modal-title" id="confirm-label">
                        <span>{!! $data['title'] !!}</span>
                    </h3>
                </div>

                <p class="m-0">{!! $data['description'] !!}</p>

                @if ($data['detail'] ?? '')
                    <blockquote class="small mb-0">
                        {!! $data['detail'] !!}
                    </blockquote>
                @endif
            </div>

            <div class="modal-footer">
                <div class="col-auto">
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                        data-bs-original-title="{{ __('Close') }}" data-bs-toggle="tooltip" type="button"
                        wire:click="close()" wire:loading.attr="disabled">
                    </button>
                </div>

                <button @click="$dispatch(@js($data['action']), {id: @js($data['id'])})"
                    class="btn col {{ $data['color'] ?? null ? 'btn-' . $data['color'] : 'btn-primary' }}"
                    type="button" wire:loading.attr="disabled">
                    {{ $data['button_label'] ?? __('Submit') }}
                </button>
            </div>
        </div>
    </div>
</div>

@push('js')
    @script
        <script>
            Livewire.on('confirm-modal', () => {
                const modal = new bootstrap.Modal('#confirm');
                modal.show();
            });

            Livewire.on('close-modal', () => {
                const modal = bootstrap.Modal.getInstance('#confirm');
                if (modal) {
                    modal.hide();
                }
            });
        </script>
    @endscript
@endpush
