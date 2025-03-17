<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Character Network</h1>
            <a href="{{ route('characters.index') }}">All Characters</a>
            <a href="{{ route('characters.create') }}">Create New Character</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>