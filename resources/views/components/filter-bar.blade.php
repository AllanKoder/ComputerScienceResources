<div>
    <form hx-history="false" hx-get="{{ url()->current() }}" hx-target="#resources-results" hx-trigger="submit" hx-push-url="true" class="flex items-center space-x-4">        
        <!-- Search Bar, for name and description -->
        <input type="text" name="query" placeholder="Search..." class="outline-none" />
        <meta name="htmx-config"
        content='{"historyCacheSize": 0, "refreshOnHistoryMiss": false}'>
        <!-- Resource Formats -->
        <div class="mb-4">
            <label for="formats" class="block text-gray-700 text-sm font-bold mb-2">Resource Format:</label>
            <x-multi-select-input name="formats">
                @foreach(config("formats") as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
            </x-multi-select-input>                
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
            <label for="topics" class="block text-gray-700 text-sm font-bold mb-2">Computer Science Topics:</label>
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

        <!-- Tags Input -->
        <div class="mb-4 w-32">
            <label for="tags" class="block text-gray-700 text-sm font-bold mb-2">Tags</label>
            <x-multi-tag-input name="tags"></x-multi-text-input>
        </div>

                    <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Filter
            </button>
        </div>          
    </form>
</div>