<header>
    <div class="h-20 bg-gray-900 text-slate-50 flex sm:justify-between items-center">
        <a class="ml-2" href="/">
            <img class="w-30" src="{{asset('/images/Logo.png')}}">
        </a>

        <ul class="flex justify-center items-center text-xl gap-6 lg:visible sm:invisible">
            <li class="hover:text-gray-300"><a href="{{asset('/')}}">About</a></li>
            <li class="hover:text-gray-300"><a href="{{asset('/')}}">Discount system</a></li>
            <li class="hover:text-gray-300"><a href="{{asset('/')}}">Our partners</a></li>
        </ul>
        @if (Route::has('login'))
        <div class="flex justify-center items-center gap-4 mr-2">
                @auth
                    <a href="{{ url('/account') }}" class="font-semibold hover:text-gray-100 text-gray-200 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Account</a>
                @else
                <a class="px-2 py-2 rounded-lg hover:bg-gray-700" href="{{route('login')}}">Log in</a>
                    @if (Route::has('register'))
                         <a class="px-2 py-2 rounded-lg hover:bg-gray-700" href="{{route('register')}}">Register</a>
                    @endif
            @endauth
        </div>
        @endif
    </div>
    @include('components.search-panel')
</header>
