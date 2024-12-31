<div aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade{{ $class ? ' ' . $class : '' }}"
    data-bs-backdrop="static" id="edit-role" style="{{ $style ?? 'display: none;' }}" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="staticBackdropLabel">
                    <i class="fas fa-edit"></i>
                    {{ __('Edit')}}{{ $role ? ': '.$role->name : ' ' . __('Role') }}
                </h5>

                <button aria-label="{{ __('Close') }}" class="btn p-1" data-bs-dismiss="modal" type="button"
                    wire:click="close()">
                    <span class="fas fa-times fs--1 text-white"></span>
                </button>
            </div>

            <form wire:submit="update">
                <div class="modal-body">
                    <div class="row gy-3">
                        <div class="col-md-7">
                            <div class="input-group">
                                <span class="input-group-text"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input class="form-control" id="name" placeholder="{{ __('Name') }}"
                                    type="text" wire:dirty.class="border-warning" wire:model.blur="form.name" />
                            </div>
                            @error('form.name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-text"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input class="form-control" id="guard_name" placeholder="{{ __('Guard') }}"
                                    type="text" wire:dirty.class="border-warning"
                                    wire:model.blur="form.guard_name" />
                            </div>
                            @error('form.guard_name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button {{ $form ? '' : 'disabled' }} class="btn btn-primary" type="submit"
                        wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-paper-plane"></i>
                        {{ __('save') }}
                    </button>
                    <button class="btn btn-outline-primary" data-bs-dismiss="modal" type="button" wire:click="close()">
                        <i class="fas fa-times"></i>
                        {{ __('Cancel') }}
                    </button>
                </div>

                @csrf
            </form>
        </div>
    </div>

    @push('js')
        @script
            <script>
                $wire.on('modal.close', (id) => {
                    $('#' + id).modal('hide')
                });
            </script>
        @endscript
    @endpush
</div>
