<x-layouts.app :title="__('Contact Us')">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">{{ __('Contact Us') }}</h1>
        <p class="mb-6">{{ __('If you have any questions or need assistance, please fill out the form below and we will get back to you as soon as possible.') }}</p>
        <form action="{{ route('home') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">{{ __('Message') }}</label>
                <textarea id="message" name="message" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                {{ __('Send Message') }}
            </button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                // Here you can add your form submission logic, e.g., AJAX request
                alert('{{ __("Thank you for contacting us! We will get back to you soon.") }}');
                form.reset();
            });
        });
    </script>
</x-layouts.app>
