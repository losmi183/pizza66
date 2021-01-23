@extends('layouts.app')

@section('content')

<h1 class="title-secondary">Roštilj</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="bbq-shop">
    <div class="container">
        <div class="row">

            @foreach ($bbq as $product)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="product-box">

                        <form class="product-form" action="{{route('addDrinkToCart')}}" method="POST">
                            @csrf
                        
                            <div class="image-wrapper" style="cursor: pointer">
                                <img src="/{{$product->image}}" alt="" class="img-fluid">
                                <div class="text-wrapper">
                                    <a class="title" href="{{ route('product', $product->slug) }}">{{$product->name}}</a>                                
                                    @if($product->discount)                                                  
                                        <h5 class="mt-2">{{$product->discount}} RSD</h5>   
                                    @else
                                        <h5 class="mt-2">{{$product->price}} RSD</h5>                                                   
                                    @endif
                                </div>
                                
                                @if ($product->badge)
                                    <div class="info-addon">{{$product->badge}}</div>
                                @endif
                            </div>
    
                            {{-- Form inputs --}}
                            
                            {{-- <h1>{{$product->price}}</h1> --}}
        

                            <input type="hidden" value="{{$product->id}}" name="id">
                            <input type="hidden" value="{{$product->name}}" name="name">
                            <input type="hidden" value="{{$product->discount ?? $product->price}}" name="price">
                            <input type="hidden" value="{{$product->image}}" name="image">
                            <input type="hidden" value="1" name="qty">                            
                            {{-- End of from inputs                       --}}                   
                            
                            <div class="order-wrapper">
                                <button href="#" class="btn btn-danger btn-block"><i class="fas fa-shopping-cart mr-2" aria-hidden="true"></i>Dodaj u korpu</button>
                            </div>

                        </form>

                    </div>
                </div>                
            @endforeach              

          </div>         <!-- Row  -->
      </div>               <!-- container -->
</section>

@include('partials.customers')
    
@endsection