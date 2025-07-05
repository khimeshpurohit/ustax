<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-neutral-100 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            @include('partials.navbar')    
            <flux:spacer />    
           
        </flux:header>
    
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
    
        <div class="bg-muted flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-md flex-col gap-6">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-9 w-9 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                    </span>

                    <span class="sr-only">{{ config('app.name', 'US_TAX') }}</span>
                </a>

                <div class="flex flex-col gap-6">
                    <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
                        <div class="px-10 py-8">{{ $slot }}</div>
                    </div>
                </div>
            </div>
        </div>

        <flux:footer container class="border-t border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            @include('partials.footer')
        </flux:footer>
        @fluxScripts
    </body>
</html>
