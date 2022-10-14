<nav class="relative container mx-auto flex justify-between py-6 px-12 ">
    <a href="#" class="flex space-x-1 py-2">
        <h1 class="font-semibold">{{ __('ECOMMERCE') }}</h1>
    </a>
    @if ((Auth::check() && auth()->user()->role === 'customer') || Auth::guest())
        <div class="hidden space-x-6 py-2 lg:flex">
            <a href="{{ route('home') }}">Home</a>
            <a href="#">About</a>
            <a href="#">Features</a>
            <a href="#">Products</a>
            <a href="#">Testimonials</a>
            <a href="#">Contact</a>
        </div>
    @endif

    @if (Auth::check() && auth()->user()->role == 'seller')
        <div class="hidden space-x-6 py-2 lg:flex">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('orders') }}">Orders</a>
        </div>
    @endif

    @guest
        <div class="flex space-x-2">
            <a href="{{ route('signup') }}" class="hidden px-3 py-2 borded rounded-full bg-blue-700 hover:bg-blue-600 text-white lg:flex">
                Sign up
            </a>
            <a href="{{ route('signin') }}" class="hidden px-3 py-2 borded rounded-full bg-blue-700 hover:bg-blue-600 text-white lg:flex">
                Sign in
            </a>
        </div>
    @endguest

    @auth
        <livewire:auth.logout/>
    @endauth
</nav>
