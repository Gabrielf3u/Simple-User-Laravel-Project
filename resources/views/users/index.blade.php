<x-layout>
    <h2>Currently available users</h2>
    <p>{{ $greeting }}</p>

    @if($greeting == "Hxh characters")
        <p>If statement</p>
    @endif

    <ul>
        @foreach($users as $user)
            <li>
                <p>{{ $user['name'] }}</p>
                <a href="/users/{{ $user['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>