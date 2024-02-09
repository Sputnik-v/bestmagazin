<div class="md:w-80 sm:w-72 bg-gray-900 p-6 text-white h-full shrink-1 sm:invisible md:visible">
    <p class="text-xl pl-3 mb-4 text-yellow-400">Catalog</p>
    <ul class="flex flex-col gap-4">


        @foreach($categories as $category)
            <li class="flex items-center w-10 gap-6">
                <img class="w-5" src="{{asset($category['icon_path'])}}">
                    <a class="{{Route::is(strtolower($category['name'])) ? 'border-b-2 rounded' : null }} p-2 text-xl hover:bg-gray-700 hover:rounded-md" href="{{route($category['name'])}}">{{$category['name']}}
                </a>
            </li>

        @endforeach

    </ul>

</div>

{{--'border-b-2 rounded'--}}
