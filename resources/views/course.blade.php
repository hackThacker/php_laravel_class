<x-frontend-layout>
    <section class="py-10">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-center mb-6">Courses</h1>
            <form action="/post_courses" method="post" enctype="multipart/form-data">
                @csrf
                <div class="py-10 flex flex-col gap-7">
                    <div>
                        <label for="name" class="block font-semibold">Course Name:</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 rounded p-2 w-full">
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
<section>
    <div class="container mx-auto">
        <table class="w-full border border-black text-center">
            <thead>
                <tr>
                    <th class="border border-black px-4 py-2">SN</th>
                    <th class="border border-black px-4 py-2">Images</th>
                    <th class="border border-black px-4 py-2">Name</th>
                    <th class="border border-black px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($courses as $niraj=>$course)
                    <tr>
                    <td class="border border-black px-4 py-2">{{++$niraj}}</td>
                    <td class="border border-black px-4 py-2 w-40">
                        <img src="{{$course->file}}" alt="images" srcset="">
                    </td>
                    <td class="border border-black px-4 py-2">{{$course->name}}</td>
                    <td class="border border-black px-4 py-2">{{$course->price}}</td>
                    
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    

</section>
</x-frontend-layout>
