<div class="w-full w-full border-r-2 border-gray-900">
    @isset($message)
        {{$message}}
    @endisset
    @isset($product)

        {{$categoryProduct['id']}}
        <div class="lg:max-w-screen-lg flex flex-col sm:justify-start">
            <img src="{{$product['imagePath']}}" alt="">
            <h3 class=""></h3>
        </div>


        <h2>{{$product['name']}}</h2>
        <p>{{$product['description']}}</p>
        <p>{{$product['price']}}</p>
        @endisset

</div>
