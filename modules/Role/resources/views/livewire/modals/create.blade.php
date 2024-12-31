<div aria-hidden="true" aria-labelledby="staticBackdropLabel" class="modal fade{{ $class ? ' ' . $class : '' }}"
    data-bs-backdrop="static" id="add-role" style="{{ $style ?? 'display: none;' }}" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="staticBackdropLabel">
                    <i aria-hidden="true" class="fa fa-user-cog"></i>
                    {{ __('Create Role') }}
                </h5>

                <button aria-label="{{ __('Close') }}" class="btn p-1" data-bs-dismiss="modal" type="button"
                    wire:click="close()">
                    <span class="fas fa-times fs--1 text-white"></span>
                </button>
            </div>

            <form class="" wire:submit="store">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input class="form-control" id="name" placeholder="{{ __('Name') }}"
                                    type="text" wire:model.blur="name" />
                            </div>
                            @error('name')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button {{ $name ? '' : 'disabled' }} class="btn btn-primary" type="submit"
                        wire:loading.attr="disabled">
                        <i aria-hidden="true" class="fa fa-paper-plane"></i>
                        {{ __('Submit') }}
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
</div>

@pushIf($name == null, 'js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('focus-name', event => {
            document.getElementById('name').focus();
        });
    });
</script>
@endpushIf
