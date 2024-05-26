<x-app-layout>
    <x-slot name="header">
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
    </x-slot>

    <div class="flex justify-center mt-8">
        <form id="resource-form" method="POST" action="{{ route('resources.store') }}" class="w-full max-w-xl">
            @csrf <!-- CSRF token for security -->
            
            <!-- Title Input -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
            </div>

            <!-- Description Input -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required></textarea>
            </div>
            
            <!-- Image URL Input -->
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 text-sm font-bold mb-2">Image URL:</label>
                <input type="url" name="image_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
            </div>
            
            <!-- Features Input -->
            <div class="mb-4">
                <label for="features" class="block text-gray-700 text-sm font-bold mb-2">Features:</label>
                <x-multi-text-input name="features" placeholder="a Feature of the Resource"></x-multi-text-input>
            </div>

            <!-- Limitations Input -->
            <div class="mb-4">
                <label for="limitations" class="block text-gray-700 text-sm font-bold mb-2">Limitations:</label>
                <x-multi-text-input name="limitations" placeholder="A Limitation of the Resource"></x-multi-text-input>
            </div>

            <!-- Resource URL Input -->
            <div class="mb-4">
                <label for="resource_url" class="block text-gray-700 text-sm font-bold mb-2">Resource URL:</label>
                <input type="url" name="resource_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
            </div>

            <!-- Pricing Input -->
            <div class="mb-4">
                <label for="cost" class="block text-gray-700 text-sm font-bold mb-2">Pricing Model:</label>
                <select name="pricing" id="pricing" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
                    <option value="free">Free</option>
                    <option value="freemium">Freemium</option>
                    <option value="subscription">Subscription Service</option>
                    <option value="paid">One Time Payment</option>
                </select>            
            </div>

            <!-- Topics Input (Dynamic Array of Inputs) -->
            <div class="mb-4">
                <x-multi-tag-input name="topics"></x-multi-text-input>
            </div>
              
            <!-- Difficulty Input -->
            <div class="mb-6">
                <label for="difficulty" class="block text-gray-700 text-sm font-bold mb-2">Difficulty:</label>
                <select name="difficulty" id="difficulty" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight" required>
                    <option value="beginner">Beginner</option>
                    <option value="industry">Industry</option>
                    <option value="academic">Academic</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

<script>

    // // Flag to control the display of the confirmation message
    // var formSubmitted = false;

    // // Function to handle the beforeunload event
    // function handleBeforeUnload(e) {
    //     if (!formSubmitted) {
    //         e.preventDefault();
    //         e.returnValue = '';
    //     }
    // }

    // // Add the beforeunload event listener
    // window.addEventListener('beforeunload', handleBeforeUnload);

    // // Set the flag to true when the form is submitted
    // $('#resource-form').on('submit', function() {
    //     formSubmitted = true;
    // });
</script>