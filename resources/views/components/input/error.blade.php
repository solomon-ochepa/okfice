@props(['name'])
@error($name)
    <div class="text-danger form-text">{{ $message }}</div>
@enderror
