<x-layouts.app :title="__('Referral Program')">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">{{ __('Referral Program') }}</h1>
        <p class="mb-6">{{ __('Join our referral program and earn rewards by inviting your friends!') }}</p>
        
        <form action="{{ route('home') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="referral_code" class="block text-sm font-medium text-gray-700">{{ __('Your Referral Code') }}</label>
                <input type="text" id="referral_code" name="referral_code" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                {{ __('Submit Referral') }}
            </button>
        </form>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-2">{{ __('How It Works') }}</h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>{{ __('Share your unique referral code with friends.') }}</li>
                <li>{{ __('When they sign up using your code, you both earn rewards.') }}</li>
                <li>{{ __('The more friends you refer, the more rewards you earn!') }}</li>
            </ul>
        </div>
</x-layouts.app>
