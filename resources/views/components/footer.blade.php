<div>


<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="http://localhost:8000" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/images/niraj-high-resolution-logo-transparent.png" class="h-12" alt="NIraj Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">NIRAJ</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ route('home') }}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="{{ route('dynamic.show', ['a' => 'John', 'b' => 'Doe']) }}" class="hover:underline me-4 md:me-6">Dynamic</a>
                </li>
                <li>
                    <a href="{{ route('course') }}" class="hover:underline me-4 md:me-6">Courses</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="http://localhost:8000" class="hover:underline">NIRAJ</a>. All Rights Reserved.</span>
    </div>
</footer>


</div>
