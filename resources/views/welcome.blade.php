<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Network</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the User Network </h1>
    <p>Select the following button to view the list of characters.</p>

    <a href="/characters" class="btn mt-4 inline-block">
        Locate Characters
    </a>
</body>
</html>