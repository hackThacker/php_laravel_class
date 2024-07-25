
<x-frontend-layout :title="'Admission'">
    <form action="{{route('post_admission')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="container mx-auto mt-8">
        <div class="admission p-8 bg-gray-100 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Admission Information</h2>
            <div class="flex justify-between">
                <!-- Left side for course details -->
                <div class="w-1/3 mr-4">
                    <div class="mb-4">
                        <label for="course_name" class="block text-gray-700">Course Name</label>
                        <select name="course_name" id="course_name" class="w-full px-4 py-2 border rounded">
                            @foreach ($courses as $course)
                            <option value="{{ $course->name }}" data-price="{{ $course->price }}">{{ $course->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="course_price" class="block text-gray-700">Course Price</label>
                        <input type="text" id="course_price" name="course_price" class="w-full px-4 py-2 border rounded" readonly>
                    </div>
                </div>
                <!-- Right side for student details -->
                <div class="w-2/3 ml-4">
                    <div class="mb-4">
                        <label for="full_name" class="block text-gray-700">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="w-full px-4 py-2 border rounded" placeholder="Enter full name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded" placeholder="Enter email">
                    </div>
                    <div class="mb-4">
                        <label for="mobile_number" class="block text-gray-700">Mobile Number</label>
                        <input type="text" id="mobile_number" name="mobile_number" class="w-full px-4 py-2 border rounded" placeholder="Enter mobile number">
                    </div>
                    <div class="mb-4">
                        <label for="birthdate" class="block text-gray-700">Birthdate</label>
                        <input type="date" id="birthdate" name="birthdate" class="w-full px-4 py-2 border rounded">
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700">Age</label>
                        <input type="number" id="age" name="age" class="w-full px-4 py-2 border rounded" placeholder="Enter age">
                    </div>
                    <div class="mb-4">
                        <label for="father_number" class="block text-gray-700">Father's Number</label>
                        <input type="text" id="father_number" name="father_number" class="w-full px-4 py-2 border rounded" placeholder="Enter father's number">
                    </div>
                    <div class="mb-4">
                        <label for="mother_number" class="block text-gray-700">Mother's Number</label>
                        <input type="text" id="mother_number" name="mother_number" class="w-full px-4 py-2 border rounded" placeholder="Enter mother's number">
                    </div>
                    <div class="mb-4">
                        <label for="citizenship_id" class="block text-gray-700">Citizenship ID</label>
                        <input type="number" id="citizenship_id" name="citizenship_id" class="w-full px-4 py-2 border rounded" placeholder="Enter citizenship ID">
                    </div>
                    <div class="mb-4">
                        <label for="location" class="block text-gray-700">Location</label>
                        <input type="text" id="location" name="location" class="w-full px-4 py-2 border rounded" placeholder="Current Adress">
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Image</label>
                        <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded" placeholder="Current images">
                    </div>
                </div>
            </div>
            <div class="mt-4 text-right">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
            </div>
        </div>
    </div>
    </form>

    <div>
        <div class="container mx-auto">
            <table class="w-full border border-black text-center">
                <thead>
                    <tr>
                        <th class="border border-black px-4 py-2">SN</th>
                        <th class="border border-black px-4 py-2">Images</th>
                        <th class="border border-black px-4 py-2">course name</th>
                        <th class="border border-black px-4 py-2">course price</th>
                        <th class="border border-black px-4 py-2">full name</th>
                        <th class="border border-black px-4 py-2">email</th>
                        <th class="border border-black px-4 py-2">number</th>
                        <th class="border border-black px-4 py-2">birthday</th>
                        <th class="border border-black px-4 py-2">age</th>
                        <th class="border border-black px-4 py-2">father number</th>
                        <th class="border border-black px-4 py-2">mother number</th>
                        <th class="border border-black px-4 py-2">citizenship number</th>
                        <th class="border border-black px-4 py-2">location</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admissions as $niraj => $admission)
                    <tr>
                        <td class="border border-black px-4 py-2">{{ ++$niraj }}</td>
                        <td class="border border-black px-4 py-2 w-40">
                            <img src="{{ $admission->image }}" alt="images" srcset="">
                        </td>
                        <td class="border border-black px-4 py-2">{{ $admission->course_name }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->course_price }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->full_name }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->email }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->mobile_number }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->birthdate }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->age }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->father_number }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->mother_number }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->citizenship_id }}</td>
                        <td class="border border-black px-4 py-2">{{ $admission->location }}</td>

                    </tr>
                @endforeach

                    </tr>
                </tbody>
            </table>

    </div>
</x-frontend-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const courseSelect = document.getElementById('course_name');
        const priceInput = document.getElementById('course_price');

        courseSelect.addEventListener('change', function() {
            // Get selected option
            const selectedOption = courseSelect.options[courseSelect.selectedIndex];

            // Retrieve price from data attribute
            const price = selectedOption.getAttribute('data-price');

            // Update price input field
            priceInput.value = price ? price : '';
        });
    });
    </script>

