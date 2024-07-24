<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<x-navbar/>

<div class="container mx-auto my-10 p-6 bg-white shadow-md flex items-center justify-between">
    <div class="text max-w-lg">
        <h1 class="text-2xl font-bold mb-4">Learning laravel</h1>
        <p>
            Dive into the world of Laravel with our easy-to-understand guides and tutorials.
            Whether you're a beginner or looking to brush up on your skills, we provide
            clear, step-by-step instructions to help you master Laravel quickly and effectively.
            Start your learning journey today and build powerful, modern web applications with confidence.
        </p>
    </div>
    <div class="flex justify-center space-x-1 py-6">
        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logomark" class="w-60 h-40">
        <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel Logotype" class="w-60 h-40">
    </div>
</div>
<x-footer/>
</body>

</html>
