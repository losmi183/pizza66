@extends('layouts.app')

@section('content')

<div class="space-50"></div>
<h1 class="title-secondary">PIZZA</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="products-shop">
    <div class="container">
        <div class="row">

            @foreach ($pizza as $product)
                <div class="col-md-4">
                    <div class="product-box">

                        <form class="product-form" action="{{route('addToCart')}}" method="POST">
                            @csrf
                        
                            <div class="image-wrapper">
                                <a href="{{ route('product', $product->slug) }}">
                                    <img src="/{{$product->image}}" alt="" class="img-fluid">
                                </a>
                                <div class="text-wrapper">
                                    <a class="title" href="{{ route('product', $product->slug) }}">{{$product->name}}</a>
                                    <p class="info">{{$product->content}}</p>
                                </div>
                                
                                @if ($product->badge)
                                    <div class="info-addon">{{$product->badge}}</div>
                                @endif
                            </div>
    
                            {{-- Form inputs --}}
                            <select class="form-control select-size" name="price">
                                @foreach (json_decode($product->prices) as $size => $price)
                                    <option value="{{ $price }}">{{ $size }} {{size($size)}}cm - {{ $price }} RSD</option>
                                @endforeach
                            </select>    
                            <input type="hidden" name="id" value="{{$product->id}}">                        
                            <input type="hidden" name="name" value="{{$product->name}}">                        
                            <input type="hidden" name="qty" value="1">                        
                            <input class="length" type="hidden" name="weight" value="0">                        
                            <input type="hidden" name="content" value="{{$product->content}}">                        
                            <input class="size" type="hidden" name="size" value="mala">                        
                            <input type="hidden" name="image" value="{{$product->image}}">   
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


