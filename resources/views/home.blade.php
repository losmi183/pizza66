@extends('layouts.app')

@section('content')

<section id="showcase">
    <div class="container text-center">
        
        <h1 class=" mb-4">Poručite putem našeg webshop-a</h1>

        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="showcase-box">
                    <i class="fas fa-book"></i>
                    <h4>Po originalnom receptu</h4>
                    <p>Posno testo</p>
                    <p>Farina di grando brašno</p>
                    <p>Capone Moyarella</p>
                </div>
            </div>
            <div class="col-md-4 margin-top-lg">
                <div class="showcase-box">
                    <i class="far fa-clock"></i>
                    <h4>Radno Vreme</h4>
                    <p>utorak - nedelja</p>
                    <p>09 - 23</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="showcase-box">
                    <i class="fas fa-car"></i>
                    <h4>Besplatna Dostava</h4>
                    <p>Starčevo, Omoljica, Brestovac i Ivanovo</p>
                    <p>Za porudzbine preko 500 dinara</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-40"></div>

<section id="brands">
    <div class="container">
        <div class="brands-wrapper">

            <div class="brand"><a target="_blanc" href="https://www.monini.com/en-gl/p/classico-extra-virgin-olive-oil"><img height="80px" src="/img/brands/monini.png" alt=""></a></div>
            <div class="brand"><a target="_blanc" href="https://www.molinobongiovanni.com/?gclid=CjwKCAiA6aSABhApEiwA6Cbm__qGCyDGSPihNoTSP3TiStv3jO_olorX3njIAdVM10qactJhRp74-hoC4uUQAvD_BwE"><img height="80px" src="/img/brands/bongiovanni-logo.png" alt=""></a></div>
            <div class="brand"><a target="_blanc" href="https://matijevic.rs/"><img height="80px" src="/img/brands/matijevic.png" alt=""></a></div>
            <div class="brand-sm"><a target="_blanc" href="https://www.metro.rs/"><img height="60px" src="/img/brands/metro-logo.png" alt=""></a></div>
            <div class="brand"><a target="_blanc" href="https://www.divella.it/en/"><img height="80px" src="/img/brands/divella.png" alt=""></a></div>
        </div>
    </div>
</section>

<div class="space-60"></div>

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
                        <h3>{{$action->name}}</h3>                                                  
                        <h3 class="text-danger mr-1">{{$action->new_price}} RSD</h3>                        
                        <p>{{$action->description}}</p>

                        <form action="{{route('addDrinkToCart')}}" method="POST">
                            @csrf

                            <input type="hidden" value="{{$action->id}}" name="id">
                            <input type="hidden" value="{{$action->name}}" name="name">
                            <input type="hidden" value="{{$action->new_price}}" name="price">
                            <input type="hidden" value="{{$action->image}}" name="image">
                            <input type="hidden" value="1" name="qty">     
                            
                            <button class="btn btn-danger mb-3 mt-2">Dodaj u korpu</button>

                            {{-- <button class="btn btn-danger mb-3 mt-2">
                                <i class="fas fa-shopping-cart mr-2" aria-hidden="true">
                                Dodaj u korpu
                            </button> --}}
                        </form>


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
<h1 class="title-secondary">Roštilj</h1>
<div class="container"><hr style="background-color: orange; width: 50%;"></div>      
<div class="space-50"></div>   

<section id="bbq-home">
    <div class="container">
        <div class="row">

            @foreach ($bbq as $product)
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="product-box">

                    <form class="product-form" action="{{route('addDrinkToCart')}}" method="POST">
                        @csrf
                    
                        <div class="image-wrapper" style="cursor: pointer">
                            <img src="/{{$product->image}}" alt="" class="img-fluid">
                            <div class="text-wrapper2">
                                <p   class="title" href="{{ route('product', $product->slug) }}">{{$product->name}}</p>                                
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

          </div>
      </div>           
</section>

@include('partials.customers')
    
@endsection


