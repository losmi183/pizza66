@extends('layouts.app')

@section('content')


<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-wrapper">
                    <img src="/img/products/madjarica.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="space-50"></div>
                <div class="product-info">                        
                    <form action="{{route('addToCart')}}" method="POST">
                        @csrf

                        <h1 class="product-title text-left">{{$product->name}}</h1>
                        <p class="product-content">{{$product->content}}</p> 

                        <h4 class="addons-*title">Veličina</h4> 

                        {{-- Form inputs --}}
                        <select class="form-control select-size" name="price">
                            @foreach (json_decode($product->prices) as $size => $price)
                                <option value="{{ $price }}">{{ $size }} {{size($size)}}cm - {{ $price }} RSD</option>
                            @endforeach
                        </select>    
                        <input type="hidden" name="id" value="{{$product->id}}">                        
                        <input type="hidden" name="name" value="{{$product->name}}"> 

                        <h4 class="addons-*title">Količina</h4> 
                        {{-- Input with increments jquery component  --}}
                        <div class="increment-wrapper" style="width: 100px">
                            <span class="prev">-</span>
                            <input name="qty" class="value" type="number" value="1">
                            <span class="next">+</span>
                        </div>
                        {{-- Input with increments jquery component  --}}              

                        <input class="length" type="hidden" name="weight" value="0">                        
                        <input type="hidden" name="content" value="{{$product->content}}">                        
                        <input class="size" type="hidden" name="size" value="mala">                        
                        <input type="hidden" name="image" value="{{$product->image}}">   
                        {{-- End of from inputs                       --}}  

                        {{-- Only product page input for redirecting  --}}
                        <input type="hidden" name="redirect" value="1">

                        <h4 class="addons-*title">Dodaci</h4>  

                        <div class="product-options mt-4">                    
                            <div id="options">

                                {{-- Loop all addons , $loop->iteration for create unique data-targer and id-s --}}
                                @foreach ($addons as $addon)
                                    <div class="option-title" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                        <h5>{{$addon->name}}</h5>
                                        <i class="fas fa-angle-down"></i>
                                    </div>

                                
                                    {{-- Colapse part  --}}
                                    <div id="collapse{{$loop->iteration}}" class="collapse option-content" data-parent="#options">

                                        {{-- Loop true version of every addon  --}}
                                        @foreach ($addon->addonOption as $option )
                                            <input class="{{$addon->name}}" type="radio" name="addon[{{$addon->name}}]" value="{{$option->id}}" >
                                            <label>{{$option->size}} - {{$option->grams}} - {{$option->price}} RSD</label><br>                                    
                                        @endforeach
                                        <span class="clear" style="cursor: pointer"><i class="far fa-window-close mr-1"></i>Poništi</span> 
                                    </div>      
                                @endforeach      
                                <button class="btn btn-danger btn-block mt-3">Dodaj u korpu</button>  
                                
                            </div>   <!-- End of Options ID -->
                        </div>     {{-- produst options  --}}

                    </form>         
                </div>      {{-- product-info --}}
            </div>   {{-- Col-md-6  --}}
        </div><!-- row               -->
    </div> <!-- container  -->
</section>

@endsection

@section('extra-js')
    <script>
        $(document).ready(function(){ 
            
            // Uncheck all radios in group
            $('.clear').click(function() {
                $(this).siblings().prop('checked', false);                
            })

        }); 
    </script>
@endsection
