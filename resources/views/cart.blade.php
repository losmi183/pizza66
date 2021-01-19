@extends('layouts.app')

@section('content')




<section id="cart">
    <div class="container">        
        <div class="table-wrapper">            
            <!-- <div class="space-20"></div> -->
            <h1 class="title-primary">Korpa</h1>
            <div class="container"><hr></div>      
            <!-- <div class="space-20"></div> -->

            <table>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td align="center" class="img-wrapper">
                            <img src="{{$item->options->image}}" alt="" class="img-fluid">
                        </td>
                        <td>
                            <div class="product-info">
                                <h4>{{$item->name}} X {{$item->qty}}</h4>
                                @if ($item->options->size)
                                    <p>{{$item->options->size}} / {{ size($item->options->size) }} cm</p>
                                @endif

                                @if ($item->options->addons)
                                    <small class="secondary-color">Dodaci:</small> <br>
                                    @foreach ($item->options->addons as $addon)
                                        <p><small>{{$addon}}</small></p>
                                    @endforeach
                                @endif

                            </div>
                        </td>
                        <td>
                            <div class="price-info">
                                <h4>    
                                    @if ($item->qty > 1)
                                        {{$item->qty}} X
                                    @endif
                                    {{$item->price}} RSD
                                </h4>
                                <form action="{{route('removeFromCart', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button title="ukloni iz korpe" class="btn btn-danger btn-sm mt-2">X</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach                
            </table>

            <div class="total">
                <h4>Ukupno: <span class="primary-color">{{Cart::subtotal()}}</span> <span class="secondary-color">RSD</span> </h4>
            </div>

            <div class="row mt-5">
                <div class="col-12 mb-2">
                    <a href="{{route('checkout')}}" class="btn btn-danger btn-block">Plaćanje</a href="{{route('checkout')}}">
                </div>
            </div>
            
            <div class="col-12">
                <section class="regular slider drinks-cart">        
                    @foreach ($drinks as $item)
                        <div>
                            <div class="row no-gutters">                            
                                <div class="col-4">
                                    <div class="img-wrapper">
                                        <img src="{{$item->image}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8 text-right d-flex flex-column justify-content-between">
                                    <div class="price-wrapper text-center">
                                        <h5 class=" @if($item->discount)primary-color line-trought @endif">{{$item->price}} RSD</h5> 
                                        @if($item->discount)                                                  
                                            <h5 class="">{{$item->discount}} RSD</h5>                                                      
                                        @endif
                                    </div>
                                    <div class="form-wrapper">
                                        <form action="{{route('addDrinkToCart')}}" method="POST">
                                            @csrf

                                            {{-- Input with increments jquery component  --}}
                                            <div class="increment-wrapper">
                                                <span class="prev">-</span>
                                                <input name="qty" class="value" type="number" value="1">
                                                <span class="next">+</span>
                                             </div>
                                             {{-- Input with increments jquery component  --}}

                                            {{-- <input class="qty" type="number" value="1" name="qty"> --}}
                                            <input type="hidden" value="{{$item->id}}" name="id">
                                            <input type="hidden" value="{{$item->name}}" name="name">
                                            <input type="hidden" value="{{$item->discount ?? $item->price}}" name="price">
                                            <input type="hidden" value="{{$item->image}}" name="image">
                                            <button class="btn btn-danger btn-sm mt-1 btn-block">Dodaj  </button>
                                        </form>
                                    </div>
                                </div>      {{-- col-8  --}}
                                <div class="col-12 mt-2 drink-name">
                                    <h5>{{$item->name}}</h5>
                                </div>
                            </div>    {{-- row --}}
                        </div>  {{-- slick main div  --}}
                    @endforeach    
                    </section>
            </div>
        </div>              <!-- MAin wrapper  -->
    </div>          <!-- container  -->
</section>
    
@endsection

