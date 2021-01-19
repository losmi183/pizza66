@extends('layouts.app')

@section('content')

<h1 class="title-secondary">Akcije</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>

<section id="actions">
    <div class="container">

        <section class="regular slider slick-actions">
            @foreach ($actions as $action)
            
                <div>
                    <div class="action-wrapper">
                        <img class="img-fluid" src="{{ asset($action->image) }}" alt="">
                        <h3 class="d-md-flex d-sm-block justify-content-between">
                            <span>{{$action->name}}</span>                           
                            <div class="primary-color d-lg-flex d-md-block"><div class="text-warning line-trought mr-1">{{$action->old_price ?? $action->old_price}}</div><div>{{$action->new_price}}</div></div>
                        </h3>
                        <p>{{$action->description}}</p>
                    </div>     
                </div>
            
            @endforeach
        </section>

    </div>
</section>

{{-- <div class="space-50"></div> --}}
<h1 class="title-secondary">PIZZA</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="products-home">
    <div class="container">
        <div class="row">
            @foreach ($pizza as $product)
                <div class="col-lg-4 col-md-6 col-12 text-wrapper sol-sm-12">
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
    
                            {{-- {{dd($product->prices)}} --}}
                            {{-- Form inputs --}}
                            <select class="form-control select-size" name="price">
                                @foreach ($product->prices as $price)
                                    <option value="{{ $price->id }}">{{ $price->size }} {{ $price->cm }} cm - {{ $price->rsd }} RSD</option>
                                @endforeach
                            </select>    
                            <input type="hidden" name="id" value="{{$product->id}}">                        
                            <input type="hidden" name="name" value="{{$product->name}}">                        
                            <input type="hidden" name="qty" value="1">                        
                            <input type="hidden" name="content" value="{{$product->content}}">                        
                            <input type="hidden" name="image" value="{{$product->image}}">   
                            {{-- End of from inputs                       --}}                   
                            
                            <div class="order-wrapper">
                                <button class="btn btn-danger btn-block"><i class="fas fa-shopping-cart mr-2" aria-hidden="true"></i>Dodaj u korpu</button>
                            </div>
                        </form>
                    </div>
                </div>                
            @endforeach    
          </div>         <!-- Row  -->
      </div>               <!-- container -->
</section>


<div class="space-50"></div>
<h1 class="title-secondary">Pića</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="drinks-home">
    <div class="container">
        <div class="row">

            @foreach ($drinks as $product)
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="product-box">

                        <form class="product-form" action="{{route('addDrinkToCart')}}" method="POST">
                            @csrf
                        
                            <div class="image-wrapper">
                                <a href="{{ route('product', $product->slug) }}">
                                    <img src="/{{$product->image}}" alt="" class="img-fluid">
                                </a>
                                <div class="text-wrapper">
                                    <a class="title drink-title" href="{{ route('product', $product->slug) }}">{{$product->name}}</a>                                
                                    @if($product->discount)                                                  
                                        <h5 class="drink-price">{{$product->discount}} RSD</h5>   
                                    @else
                                        <h5 class="drink-price">{{$product->price}} RSD</h5>                                                   
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
                                <button href="#" class="btn btn-danger btn-block"><i class="fas fa-shopping-cart mr-2" aria-hidden="true"></i>U korpu</button>
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


