<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Network | Home</title>
</head>
<body>
    <h2>Currently available users</h2>
    <p>{{ $greeting }}</p>
    
    <ul>
        <li>
            <a href="/users/{{ $users[0]["id"] }}">
                {{ $users[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/users/{{ $users[1]["id"] }}">
                {{ $users[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>