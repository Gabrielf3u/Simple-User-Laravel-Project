<x-layout>
    <h2>Currently available characters</h2>

    <ul>
        @foreach($characters as $character)
            <li>
                <x-card href="{{ route('characters.show', $character->id) }}" :highlight="$character['age'] < 30">
                    <h3>{{ $character->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>