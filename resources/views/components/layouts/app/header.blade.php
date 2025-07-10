<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <!-- <flux:header container class=""> -->
        {{-- <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" /> --}}

        {{-- <a href="{{ route('home') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
            wire:navigate>
            <x-app-logo />
        </a>
         --}}
        @include('partials.navbar')

        {{-- <flux:spacer /> --}}

    <!-- </flux:header> -->

    <!-- Mobile Menu -->
    {{-- <flux:sidebar stashable sticky
        class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Navigation')">
                <flux:navlist.item icon="home" :href="route('home')" :current="request()->routeIs('home')"
                    wire:navigate>
                    {{ __('Home') }}
                </flux:navlist.item>
                <flux:navlist.item icon="information-circle" :href="route('about')"
                    :current="request()->routeIs('about')" wire:navigate>
                    {{ __('About') }}
                </flux:navlist.item>
                <flux:navlist.item icon="briefcase" :href="route('services')"
                    :current="request()->routeIs('services')" wire:navigate>
                    {{ __('Services') }}
                </flux:navlist.item>
                <flux:navlist.item icon="layout-grid" :href="route('dashboard')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </flux:navlist.item>
                <flux:navlist.item icon="layout-grid" :href="route('contact')"
                    :current="request()->routeIs('contact')" wire:navigate>
                    {{ __('Contact Us') }}
                </flux:navlist.item>

            </flux:navlist.group>


        </flux:navlist>

        <flux:spacer />

    </flux:sidebar> --}}

    {{ $slot }}

    <!-- <flux:footer container class="border-t border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"> -->
        @include('partials.footer')
    <!-- </flux:footer> -->
    <script src="{{ asset('/js/homepage.js') }}"></script>
    @fluxScripts
</body>

</html>
