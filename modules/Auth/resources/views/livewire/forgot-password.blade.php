 <div>
     <x-auth::page.header :description="__('Type your e-mail to reset your password')" :title="__('Forgot password')" />

     <x-themes.app.header back='login' class="no-border transparent position-absolute">
         @slot('title', '')
         @slot('right')
             <div>
                 @if (Route::has('login'))
                     <i aria-hidden="true" class="fa fa-user-plus"></i>
                     <a href="{{ route('login') }}">{{ __('Login') }}</a>
                 @endif
             </div>
         @endslot
     </x-themes.app.header>

     <div class="section mb-5 p-2">
         <form wire:submit="sendPasswordResetLink">
             <div class="card">
                 <div class="card-body pb-1">
                     <div class="form-group basic">
                         <div class="input-wrapper">
                             <label class="label" for="username">{{ __('Username') }}</label>
                             <input autofocus autocomplete="username" class="form-control" id="username" placeholder="username, email, phone, ..."
                                 required type="text" wire:model="username">
                             <x-input.clear />
                             <x-input.error name="username" />
                         </div>
                     </div>
                 </div>
             </div>

             <div class="form-button-group transparent">
                 <button class="btn btn-primary btn-block btn-lg" type="submit">Reset Password</button>
             </div>
         </form>
     </div>
 </div>
