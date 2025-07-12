
  <!-- Header -->
  <header class="border-b shadow-sm z-10">
    <div class="container flex py-4 justify-between items-center">
      <div class="flex items-center space-x-3">
<<<<<<< Updated upstream
        <img src="images/logo.svg" alt="Logo" class="w-10 h-10 md:w-20 md:h-20" />
=======
        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-10 h-10md:w-20 md:h-20" />
>>>>>>> Stashed changes

      </div>

      <!-- Desktop Nav -->
      <nav class="hidden lg:flex items-center space-x-6 text-base">
        <a href={{ route('home') }}  class="nav-link text-primary active"  wire:navigate>Home</a>
        <a  href={{ route('about') }} class="nav-link text-black hover:text-primary"  wire:navigate>About Us</a>

        <!-- Dropdown Wrapper -->
        <div class="nav-link dropdown relative group">
          <button class="dropdown-toggle flex items-center text-black hover:text-primary cursor-pointer">
            Services
            <svg class="icon ml-1 w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="dropdown-panel absolute top-10 left-0 w-52 bg-white shadow-md border rounded hidden z-10">
            

            <!-- Nested Dropdown -->
            <div class="dropdown relative group">
              <button
                class="dropdown-toggle flex justify-between items-center w-full px-4 py-2 hover:bg-gray-100 cursor-pointer">
                Individual Tax Fill
                <svg class="icon ml-2 w-3 h-3 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </button>
              <div
                class="dropdown-panel absolute left-full top-0 mt-0 ml-1 w-48 bg-white border rounded shadow-md hidden">
                <a href={{ route('individual-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Federal and State Tax Filing</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>FBAR Processing & FATCA Processing</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>ITIN Processing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Tax Representation Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Amendment Filing Services     </a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Indian Tax Filing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Advanced Tax Planning Services</a>
              </div>
            </div>
            <!-- Nested Dropdown -->
            <div class="dropdown relative group">
              <button
                class="dropdown-toggle flex justify-between items-center w-full px-4 py-2 hover:bg-gray-100 cursor-pointer">
                Business Tax Fill
                <svg class="icon ml-2 w-3 h-3 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </button>
              <div
                class="dropdown-panel absolute left-full top-0 mt-0 ml-1 w-48 bg-white border rounded shadow-md hidden">
                <a href={{ route('individual-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Entity Formation Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Corporate Tax Filing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Limited Liability Company (LLC) Services</a>
              </div>
            </div>
          </div>
        </div>


        <a href={{ route('refund') }} class="nav-link text-black hover:text-primary">Refund</a>
        <a href={{ route('referral') }} class="nav-link text-black hover:text-primary">Referral Program</a>
        <a href={{ route('contact') }} class="nav-link text-black hover:text-primary">Contact Us</a>
      </nav>
      <div class="hidden lg:flex space-x-3">
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
                    <div class="items-center space-x-4 rtl:space-x-reverse">
                        <a href="{{ route('login') }}" class="px-4 py-1 rounded-full text-white bg-primary hover:bg-secondary text-base cursor-pointer"
                            wire:navigate>
                            {{ __('Sign In') }}
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-4 py-1 rounded-full text-primary border border-primary text-base hover:bg-primary cursor-pointer hover:text-white" wire:navigate>
                                {{ __('Sign Up') }}
                            </a>
                        @endif
                    </div>
                @endauth
            </div>
  

      <!-- Mobile Toggle -->
       <div class="lg:hidden flex gap-3 items-center">
         <div class="flex space-x-3">
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
                    <a href="{{ route('login') }}" class="px-4 py-1 rounded-full text-white bg-primary hover:bg-secondary text-sm cursor-pointer"
                        wire:navigate>
                        {{ __('Sign In') }}
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-1 rounded-full text-primary border border-primary text-sm hover:bg-primary cursor-pointer hover:text-white" wire:navigate>
                            {{ __('Sign Up') }}
                        </a>
                    @endif
                </div>
            @endauth
          </div>
    
        <button id="menu-toggle" class=" text-black relative">
          <svg class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  

  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-40 md:hidden">
    <!-- Add at the top of #mobile-menu -->
    <div class="flex justify-end p-4">
      <button class="close-sidebar text-black">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="p-6 space-y-4 text-sm">
      <a href={{ route('home') }} class="nav-link block text-primary " wire:navigate>Home</a>
      <a href={{ route('about') }} class="nav-link block text-black" wire:navigate>About Us</a>

      <!-- Mobile Dropdown -->
      <div class="nav-link dropdown">
        <button class="dropdown-toggle w-full text-left flex justify-between items-center text-black py-2">
          Services
          <svg class="icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="dropdown-panel pl-4 mt-2 space-y-2 hidden">
         

          <!-- Nested Dropdown -->
          <div class="dropdown">
            <button class="dropdown-toggle w-full text-left flex justify-between items-center text-gray-600 py-2">
              Individual Tax Fill
              <svg class="icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="dropdown-panel pl-4 mt-2 space-y-2 hidden">
              <a href={{ route('individual-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Federal and State Tax Filing</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>FBAR Processing & FATCA Processing</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>ITIN Processing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Tax Representation Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Amendment Filing Services     </a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Indian Tax Filing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Advanced Tax Planning Services</a>
            </div>
          </div>
          <!-- Nested Dropdown -->
          <div class="dropdown">
            <button class="dropdown-toggle w-full text-left flex justify-between items-center text-gray-600 py-2">
              Business Tax Fill
              <svg class="icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="dropdown-panel pl-4 mt-2 space-y-2 hidden">
                 <a href={{ route('individual-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Entity Formation Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Corporate Tax Filing Services</a>
                <a href={{ route('business-tax-fill') }} class="block px-4 py-2 hover:bg-gray-100" wire:navigate>Limited Liability Company (LLC) Services</a>
            </div>
          </div>
        </div>
      </div>



      <a href={{ route('refund') }} class="nav-link block text-black">Refund</a>
      <a href={{ route('referral') }} class="nav-link block text-black">Referral Program</a>
      <a href={{ route('contact') }} class="nav-link block text-black">Contact Us</a>

      
    </div>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30 md:hidden"></div>
  </header>