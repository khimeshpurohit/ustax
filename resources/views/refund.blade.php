<x-layouts.app :title="__('Refund')">   
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">{{ __('Refund Request') }}</h1>
        <p class="mb-6">{{ __('If you are not satisfied with your purchase, you can request a refund within 30 days of the purchase date.') }}</p>
        
        <form action="{{ route('home') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="order_id" class="block text-sm font-medium text-gray-700">{{ __('Order ID') }}</label>
                <input type="text" id="order_id" name="order_id" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="reason" class="block text-sm font-medium text-gray-700">{{ __('Reason for Refund') }}</label>
                <textarea id="reason" name="reason" rows="4" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                {{ __('Submit Refund Request') }}
            </button>
        </form>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-2">{{ __('Refund Policy') }}</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>{{ __('Refunds are processed within 7 business days.') }}</li>
                <li>{{ __('You will receive a confirmation email once your refund is processed.') }}</li>
                <li>{{ __('Please ensure that you provide accurate information to avoid delays.') }}</li>
            </ul>
        </div>

</x-layouts.app>
