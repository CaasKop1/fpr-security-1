<a href="{{ route($route) }}" class="navbar-item @if (url()->current() === route($route)) has-background-warning @endif">
    {{ $slot }}
</a>
