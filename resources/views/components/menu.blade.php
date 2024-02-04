<div class="md:w-80 sm:w-72 bg-gray-900 p-6 text-white h-full shrink-1 sm:invisible md:visible">
    <p class="text-xl pl-3 mb-4 text-yellow-400">Catalog</p>
    <ul class="flex flex-col gap-4">

        @foreach($categories as $category)
            <li class="flex items-center w-10 gap-6">
                <img class="w-5" src="{{asset($category['icon_path'])}}">
                    <a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">{{$category['name']}}
                </a>
            </li>
        @endforeach

{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/television.svg')}}"><a href="{{asset('/')}}" class="p-2 hover:bg-gray-700 hover:rounded-md active text-xl">Televisions</a></li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/boiling.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Boiling</a></li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/phone.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Phones</a></li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/vacuum.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Vacuums</a></li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/refrigerator.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Refrigerators</a> </li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/photograph.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Photographs</a> </li>--}}
{{--        <li class="flex items-center w-10 gap-6"><img class="w-5" src="{{asset('images/icons/headphones.svg')}}"><a class="p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{asset('/')}}">Headphones</a> </li>--}}
    </ul>

</div>
