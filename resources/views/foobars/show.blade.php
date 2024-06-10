<x-main>
    <section class="section">
        <h1 class="title">{{ $foobar->name }}</h1>
        <p></p>{{ $foobar->description }}</p>
        <div class="buttons">
            <a href="{{ route('foobars.edit', $foobar) }}" class="button is-primary">Edit</a>
            <form action="{{ route('foobars.destroy', $foobar) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="button is-danger" type="submit">Delete</button>
            </form>
        </div>
    </section>
</x-main>
