<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.*')">
                        {{ __('Blog') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('meeting.index')" :active="request()->routeIs('meeting.*')">
                        {{ __('Schedule Meeting') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Admin Link (only show if authenticated) -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.*')">
                        <i class="fas fa-cog mr-2"></i>{{ __('Admin Panel') }}
                    </x-nav-link>
                </div>
            @endauth
        </div>
    </div>
</nav>
