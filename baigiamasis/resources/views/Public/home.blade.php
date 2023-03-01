@extends('main')
@section('content')
    @foreach($products as $product)
        {{$product->name}}<br>
        <form method="post" action="/cart/add">
            @csrf
            <input type="hidden" name="product_id">
            <button type="submit">Add to Cart</button>
        </form>

        <div class="logout"><img src="" alt="logout"></div>
        <div class="slogan">AKS Design</div>

            <div class="flex justify-between items-center">
                <div class="flex space-x-3 justify-center items-center text-gray-800 dark:text-white">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1.svg" alt="toggler">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1dark.svg
                    </div>

      <div> <img width="200" src="https://i.pinimg.com/originals/d2/fe/cf/d2fecf2e80e9ce13cda8da7950132fd9.jpg"
                    alt="landscape"
                    class="var foto">

                </div>

                <div> <img width="500" src="https://lirp.cdn-website.com/ae3a7221/dms3rep/multi/opt/all_product_800x400-640w.jpg"
                           alt="landscape"
                           class="var foto">
                </div>

                <div> <img width="250" src="https://colibriclub.net/products/371_PaoK.single.bottle.800x500.jpg"
                           alt="landscape"
                           class="var foto"></div>
                                   </div>
                                </main>
                                        <div class="2xl:container 2xl:mx-auto">
                                            <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
                                                <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"></p>

                                                <img
                                                    src="https://dellshop.lt/img/c/23.jpg"
                                                    width="200"
                                                    alt="A work table with house plants"
                                                    role="img" class="sm:hidden w-full h-full"
                                                />
                                            </div>

    @endforeach
@endsection

