<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Network | Home</title>
</head>
<body>
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
</body>
</html>