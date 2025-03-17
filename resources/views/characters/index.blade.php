<x-layout>
    <h2>Currently available characters</h2>

    <ul>
        @foreach($characters as $character)
            <li>
                <x-card href="/characters/{{ $character->id }}" :highlight="$character['age'] < 20">
                    <h3>{{ $character->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>