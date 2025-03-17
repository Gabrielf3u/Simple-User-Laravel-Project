<x-layout>
    <h2>{{ $character->name }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Age:</strong> {{ $character->age }}</p>
        <p><strong>About:</strong></p>
        <p>{{ $character->bio }}</p>
</x-layout>