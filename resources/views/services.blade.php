<x-layouts.app :title="__('Our Services')">
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-bold mb-4 dark:text-white">{{ __('Our Services') }}</h1>
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6">
            {{ __('We offer a wide range of services to meet your needs.') }}
        </p>
        <ul class="list-disc list-inside text-md text-gray-600 dark:text-gray-400">
            <li>{{ __('Service 1: High-quality web development') }}</li>
            <li>{{ __('Service 2: Professional graphic design') }}</li>
            <li>{{ __('Service 3: Comprehensive digital marketing') }}</li>
            <li>{{ __('Service 4: Reliable IT support') }}</li>
        </ul>
    </div>
    <div class="mt-8">
        <p class="text-md text-gray-600 dark:text-gray-400">
            {{ __('For more information about our services, please contact us.') }}
        </p>
        <a href="{{ route('contact') }}" class="mt-4 inline-block px-6 py-2 bg-blue-600 dark:bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-700 dark:hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 dark:focus:ring-blue-400">
            {{ __('Contact Us') }}
        </a>
    </div>
</x-layouts.app>