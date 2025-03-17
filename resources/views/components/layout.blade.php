<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>User Network</h1>
            <a href="/characters">All Characters</a>
            <a href="/characters/create">Create New Character</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>