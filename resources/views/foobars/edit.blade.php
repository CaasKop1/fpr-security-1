<x-main>
    <section class="section">
        <h1 class="title">Edit foobar</h1>
        <form action="{{ route('foobars.update', $foobar) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" id="name" value="{{ old('name', $foobar->name) }}" required>
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <textarea class="textarea" name="description" id="description" required>{{ old('description', $foobar->description) }}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </section>
</x-main>
