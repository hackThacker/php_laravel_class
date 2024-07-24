<!DOCTYPE html>
<html lang="en">
    @props(['title'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niraj {{$title ?? ''}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
<x-navbar/>
    </header>
    
    <main>
{{$slot}}
    </main>

    <footer>
        <x-footer/>
    </footer>
</body>
</html>