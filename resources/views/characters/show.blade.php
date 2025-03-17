<x-layout>
    <h2>{{ $character->name }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Age:</strong> {{ $character->age }}</p>
        <p><strong>About:</strong></p>
        <p>{{ $character->bio }}</p>

    {{-- origin info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Origin Information</h3>
        <p><strong>Country:</strong> {{ $character->origin->name }}</p>
        <p><strong>City:</strong> {{ $character->origin->location }}</p>
        <p><strong>About the place:</strong></p>
        <p>{{ $character->origin->description }}</p>
    </div>

    <form action="{{ route('characters.destroy', $character->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete Character</button>
    </form>
</x-layout>