<div class="border-r-2 border-gray-900">
    <p class="text-right text-gray-900 p-4 text-xl bg-gray-100 w-full bg-yellow-400">New products</p>


        <div class="grid lg:grid-cols-3 md:grid-cols-2 m-4 gap-4">


            @foreach($goods as $good)
                <a href="{{route('product', ['id' => $good['id']])}}" class="bg-teal-500 flex flex-col justify-between items-center h-96 border-solid border-slate-50 border-2 rounded-md duration-100 hover:shadow-2xl hover:shadow-current">
                    <p class="mt-4 text-center text-gray-900 font-bold mb-2">{{$good['name']}}</p>
                    <img class="w-full h-64 object-cover" src="{{url($good['imagePath'])}}" alt={{$good['name']}}>
                    <div class="flex justify-between items-center mb-4 mt-1 gap-6">
                        <button class="bg-yellow-500 px-4 py-2 rounded-md font-bold drop-shadow-md hover:scale-110 text-white duration-100">BUY</button>
                        <p class="mr-4 px-4 py-2 text-white font-bold">{{$good['price']}}$</p>
                    </div>
                </a>
            @endforeach

{{--                <a href="{{asset('/')}}" class="bg-teal-500 flex flex-col justify-between items-center h-96 border-solid border-slate-50 border-2 rounded-md duration-100 hover:shadow-2xl hover:shadow-current">--}}
{{--                    <p class="mt-4 text-gray-900 font-bold mb-2">Telefunken Tele</p>--}}
{{--                    <img class="w-full h-64 object-cover" src="{{asset('images/telefunken.jpg')}}" alt="Telefunken">--}}
{{--                    <div class="flex justify-between items-center mb-4 mt-1">--}}
{{--                        <button class="bg-yellow-500 px-4 py-2 rounded-md font-bold drop-shadow-md hover:scale-110 text-white duration-100">BUY</button>--}}
{{--                        <p class="mr-4 px-4 py-2 text-yellow-400 font-bold">100$</p>--}}
{{--                    </div>--}}
{{--                </a>--}}




        </div>

</div>
