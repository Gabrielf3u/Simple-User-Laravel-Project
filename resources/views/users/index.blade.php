<x-layout>
    <h2>Currently available users</h2>
    <p>{{ $greeting }}</p>

    @if($greeting == "Hxh characters")
        <p>If statement</p>
    @endif

    <ul>
        @foreach($users as $user)
            <li>
                <x-card href="/users/{{ $user['id'] }}" :highlight="$user['age'] < 20">
                    <h3>{{ $user['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>