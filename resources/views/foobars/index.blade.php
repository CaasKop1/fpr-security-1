<x-main>
    <section class="section">
        @if (session('success'))
            <div id='notification' class="notification is-success">
                <button id="delete-notification-button" class="delete"></button>
                {{ session('success') }}
            </div>
        @endif
        <div class="is-flex is-justify-content-space-between is-align-items-center">
            <h1 class="title pt-5">Foobars</h1>
            <a href="{{ route('foobars.create') }}" class="button is-primary">Create a new foobar</a>
        </div>
        @forelse ($foobars as $foobar)
        <a class="box" href="{{ route('foobars.show', $foobar) }}">
            <h1>{{ $foobar->name }}</h1>
            <p>{{ substr($foobar->description, 0, 500) }}</p>
        </a>
        @empty
        <p>No foobars associated with your account are found.</p>
        @endforelse
        <script>
            document.getElementById('delete-notification-button').addEventListener('click', () => {
                document.getElementById('notification').remove();
            });
        </script>
</x-main>
