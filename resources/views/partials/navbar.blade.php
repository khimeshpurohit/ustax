<body class="bg-white font-sans">
    <!-- Header -->
    <header class="border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <x-app-logo class="w-10 h-10" />
                {{-- Uncomment the line below to use a placeholder logo --}}
                {{-- <img src="https://via.placeholder.com/40" alt="Logo" class="w-10 h-10" /> --}}
                <span class="text-sm font-bold text-red-600">US TAX DEALS</span>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-6 text-sm">
                <a href={{ route('home') }} class="text-purple-600 font-semibold" wire:navigate>Home</a>
                <a href={{ route('about') }} class="text-gray-700 hover:text-purple-600" wire:navigate>About Us</a>

                <!-- Dropdown Wrapper -->
                <div class="relative" id="desktop-services-wrapper">
                    <button id="desktop-services-toggle" class="flex items-center text-gray-700 hover:text-purple-600">
                        Services
                        <svg id="desktop-arrow" class="w-4 h-4 ml-1 transition-transform" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="desktop-dropdown"
                        class="absolute top-10 left-0 w-52 bg-white shadow-md border rounded hidden opacity-0 transition-all">
                        <a href={{ route('individual-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Individual Tax Fill</a>
                        <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Business Tax Fill</a>

                        <!-- Nested Dropdown Example -->
                        <div class="group relative">
                            <button class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                                More Services
                                <svg class="w-3 h-3 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <div
                                class="absolute left-full top-0 mt-0 ml-1 w-48 bg-white border rounded shadow-md hidden group-hover:block">
                                <a href={{ route('payroll') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Payroll</a>
                                <a href={{ route('book-keeping') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Bookkeeping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href={{ route('refund') }} class="text-gray-700 hover:text-purple-600" wire:navigate>Refund</a>
                <a href={{ route('referral') }} class="text-gray-700 hover:text-purple-600" wire:navigate>Referral Program</a>
                <a href={{ route('contact') }} class="text-gray-700 hover:text-purple-600" wire:navigate>Contact Us</a>
            </nav>

            <div class="hidden md:flex space-x-3">
                @auth
                    <!-- Desktop User Menu -->
                    <flux:dropdown position="top" align="end">
                        <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()" />

                        <flux:menu>
                            <flux:menu.radio.group>
                                <div class="p-0 text-sm font-normal">
                                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                        <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                            <span
                                                class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                                {{ auth()->user()->initials() }}
                                            </span>
                                        </span>

                                        <div class="grid flex-1 text-start text-sm leading-tight">
                                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </flux:menu.radio.group>

                            <flux:menu.separator />

                            <flux:menu.radio.group>
                                <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>
                                    {{ __('Settings') }}
                                </flux:menu.item>
                            </flux:menu.radio.group>

                            <flux:menu.separator />

                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                                    class="w-full">
                                    {{ __('Logout') }}
                                </flux:menu.item>
                            </form>
                        </flux:menu>
                    </flux:dropdown>
                @else
                    <!-- Desktop Auth Links -->
                    <div class="hidden lg:flex items-center space-x-4 rtl:space-x-reverse">
                        <a href="{{ route('login') }}" class="px-4 py-1 rounded-full text-white bg-purple-400 hover:bg-purple-500 text-sm"
                            wire:navigate>
                            {{ __('Sign In') }}
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-4 py-1 rounded-full text-purple-500 border border-purple-400 text-sm hover:bg-purple-100" wire:navigate>
                                {{ __('Sign Up') }}
                            </a>
                        @endif
                    </div>
                @endauth
            </div>

            <!-- Mobile Toggle -->
            <button id="menu-toggle" class="md:hidden text-gray-700 z-50 relative">
                <svg id="hamburger-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div id="mobile-menu"
        class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-40 ">
        <div class="p-6 space-y-4 text-sm">
            <a href="#" class="block text-purple-600 font-semibold">Home</a>
            <a href="#" class="block text-gray-700">About Us</a>

            <!-- Mobile Dropdown -->
            <div id="mobile-services-wrapper">
                <button id="mobile-services-toggle"
                    class="w-full text-left text-gray-700 font-medium flex justify-between items-center">
                    Services
                    <svg id="mobile-arrow" class="w-4 h-4 transform transition-transform" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobile-dropdown" class="pl-4 mt-2 space-y-1 hidden opacity-0 transition-all">
                    <a href="#" class="block text-gray-600">Individual Tax Fill</a>
                    <a href="#" class="block text-gray-600">Business Tax Fill</a>

                    <!-- ✅ Nested Dropdown -->
                    <div id="mobile-nested-wrapper">
                        <button id="mobile-nested-toggle"
                            class="w-full text-left flex justify-between items-center text-gray-600">
                            More Services
                            <svg id="mobile-nested-arrow" class="w-4 h-4 transform transition-transform"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="mobile-nested-dropdown" class="pl-4 mt-2 space-y-1 hidden opacity-0 transition-all">
                            <a href="#" class="block text-gray-600">Payroll</a>
                            <a href="#" class="block text-gray-600">Bookkeeping</a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#" class="block text-gray-700">Refund</a>
            <a href="#" class="block text-gray-700">Referral Program</a>
            <a href="#" class="block text-gray-700">Contact Us</a>

            <div class="pt-4 flex space-x-3">
                @auth
                <!-- Mobile User Menu -->
                <flux:dropdown position="top" align="end">
                    <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()" />

                    <flux:menu>
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                        <span
                                            class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                            {{ auth()->user()->initials() }}
                                        </span>
                                    </span>

                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                        <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>
                                {{ __('Settings') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                                class="w-full">
                                {{ __('Logout') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            @else
                <!-- Mobile Auth Links -->
                <div class="lg:flex items-center space-x-4 rtl:space-x-reverse">
                    <a href="{{ route('login') }}" class="px-4 py-1 rounded-full text-white bg-purple-400 hover:bg-purple-500 text-sm"
                        wire:navigate>
                        {{ __('Sign In') }}
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-1 rounded-full text-purple-500 border border-purple-400 text-sm hover:bg-purple-100" wire:navigate>
                            {{ __('Sign Up') }}
                        </a>
                    @endif
                </div>
            @endauth
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30 md:hidden"></div>
