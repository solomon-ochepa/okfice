@props(['user' => auth()->user()])
<div class="profileBox border-bottom border-primary pb-2 pt-2">
    <div class="image-wrapper">
        <img alt="image" class="imaged w36" src="{{ asset('unknown.webp') }}">
    </div>
    <div class="in">
        <strong>{{ $user->name }}</strong>
        <div class="text-muted">{{ $user->username }}</div>
    </div>
    <a class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal" href="#">
        <ion-icon name="close-outline"></ion-icon>
    </a>
</div>
