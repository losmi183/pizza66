@extends('layouts.app')

@section('content')

<div class="space-50"></div>
<h1 class="title-secondary">Pića</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="drinks-shop">
    <div class="container">
        <div class="row">

            @foreach ($drinks as $product)
                <div class="col-md-4">
                    <div class="product-box">

                        <form class="product-form" action="{{route('addToCart')}}" method="POST">
                            @csrf
                        
                            <div class="image-wrapper" style="cursor: pointer">
                                <img src="/{{$product->image}}" alt="" class="img-fluid">
                                <div class="text-wrapper">
                                    <a class="title" href="{{ route('product', $product->slug) }}">{{$product->name}}</a>                                
                                    @if($product->discount)                                                  
                                        <h5 class="">{{$product->discount}} RSD</h5>   
                                    @else
                                        <h5 class="">{{$product->price}} RSD</h5>                                                   
                                    @endif
                                </div>

                                <div class="info-addon">NOVO</div>
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