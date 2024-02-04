<div class="h-full w-full bg-gray-900">
    <div class="py-4 flex flex-row justify-center items-center gap-52">
        <ul class="flex flex-col text-indigo-100 list-none">
            <li class="hover:text-yellow-500 text-yellow-400 mt-2"><a href="{{asset('/')}}">About</a></li>
            <li class="hover:text-gray-300 mt-2"><a href="{{asset('/')}}">Discount system</a></li>
            <li class="hover:text-gray-300 mt-2"><a href="{{asset('/')}}">Our partners</a></li>
            <li class="hover:text-gray-300 mt-2"><a href="{{asset('/')}}">Have a question?</a></li>
        </ul>
        <ul class="text-indigo-100">
            <li class="mt-2 text-yellow-400 hover:text-yellow-500"><a class="" href="{{asset('/')}}">Most purchased</a></li>
            <li class="hover:text-gray-300 mt-2"><a class="" href="{{asset('/')}}">The cheapest</a></li>
            <li class="hover:text-gray-300 mt-2"><a class="" href="{{asset('/')}}">We recommend</a></li>
            <li class="hover:text-gray-300 mt-2"><a class="" href="{{asset('/')}}">Stock</a></li>
        </ul>
    </div>
    <div class="flex flex-col items-center justify-center">
        <div class="flex flex-row justify-center items-center gap-6 my-4">
            <a class="" href="{{asset('/')}}"><img class="w-10 h-10 hover:scale-110" src="{{asset('images/icons/vk.png')}}" alt="vk"></a>
            <a class="" href="{{asset('/')}}"><img class="w-10 h-10 hover:scale-110" src="{{asset('images/icons/facebook.png')}}" alt="fb"></a>
            <a class="" href="{{asset('/')}}"><img class="w-10 h-10 hover:scale-110" src="{{asset('images/icons/instagram.png')}}" alt="in"></a>
        </div>
        <div>
            <p class="text-indigo-100">@ {{date('Y')}} This is page by Pegasus</p>
        </div>
    </div>
</div>
