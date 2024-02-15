<div class="w-full w-full border-r-2 border-gray-900">
    @isset($message)
        {{$message}}
    @endisset
    @isset($product)
        <div class="flex justify-center flex-col items-center">
            <div class="">
                <img class="w-full h-[400px] object-cover" src="{{$product['imagePath']}}" alt="{{$product['name']}}">
            </div>


            <h2 class="my-6 text-white text-xl">{{$product['name']}}</h2>
            <p class="text-white">{{$product['description']}}</p>
            <p class="my-6 text-yellow-400 border-2 border-yellow-400 px-3">price: {{$product['price']}}$</p>

            <div class="w-full flex justify-between items-center mb-6 relative">

                    @auth
                        <button class="ml-12 font-bold rounded-md text-indigo-500 border-2 border-indigo-500 py-2 px-4 bg-gray-300 hover:bg-gray-800">Add to Basket</button>
                    @endauth

                    @guest
                        <button disabled class="hover:after:content-['You_must_log_in!'] after:absolute after:left-10 after:top-10 disabled:opacity-25 ml-12 font-bold rounded-md text-indigo-500 border-2 border-indigo-500 py-2 px-4 bg-gray-300">Add to Basket</button>
                    @endguest

                <button class="mx-12 font-bold rounded-md text-cyan-400 border-2 border-cyan-400 py-2 px-6 bg-gray-500 hover:bg-yellow-100">Buy</button>

            </div>
        </div>
        @endisset

</div>
