<x-main>
    <section class="section">
        <h1 class="title">Create a new foobar</h1>
        <form action="{{ route('foobars.store') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" id="name" required>
                </div>
            </div>
            <div class="field">
                <label class="label" for="description">Description</label>
                <div class="control">
                    <textarea class="textarea" name="description" id="description" required></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Create</button>
                </div>
            </div>
        </form>
</x-main>
