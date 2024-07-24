<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar />
    <section class="py-10">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-center mb-6">Courses</h1>
            <form action="/post_courses" method="post">
                @csrf
                <div class="py-10 flex flex-col gap-7">
                    <div>
                        <label for="name" class="block font-semibold">Course Name:</label>
                        <input type="text" name="course" id="name" class="border border-gray-300 rounded p-2 w-full">
                    </div>
                    <div>
                        <label for="price" class="block font-semibold">Course Price:</label>
                        <input type="number" name="price" id="price" class="border border-gray-300 rounded p-2 w-full">
                    </div>
                    <div>
                        <label for="file" class="block font-semibold">Course File:</label>
                        <input type="file" name="file" id="file" class="border border-gray-300 rounded p-2 w-full">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-blue-600 rounded-md text-white px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <x-footer />
</body>

</html>
