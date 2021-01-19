@extends('admin.layout')

@section('content')    

<div class="card-header">
    <div class="form-group d-flex align-middle m-0">
        <span class="mt-2 mr-3 admin-title">Status Porudzbine</span>

        <a href="/admin/orders" class="btn btn-outline-secondary">Nazad</a>
    </div>
</div>

<div class="card-body row">            
    <div class="col-lg-4 mb-4"> 
        <h3 class="mb-4">Podaci o kupcu</h3>
        <div class="line"></div>
        Id Porudzbine: <strong>{{$order->id}}</strong   > <hr>
        Ime i prezime: <strong>{{$order->ime}}</strong> <hr>  
        {{-- Prezime: <strong>{{$order->prezime}}</strong> <hr> --}}
        Email: <strong>{{$order->email}}</strong> <hr>  
        Adresa: <strong>{{$order->adresa}}</strong> <hr>
        Telefon: <strong>{{$order->telefon}}</strong> <hr>
        Dodatna napomena: <p>{{$order->napomene}}</p> <hr>
        Ukupno za naplatu: <strong>{{$order->suma}}</strong> <hr>

        <form action="/admin/orders/timeResponse" method="POST">
            @csrf
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <div class="form-group">
                <label>VREME DOSTAVE</label>
                <select name="time" class="form-control">
                    <option {{ $order->time == 15 ? 'selected' : '' }} value="15">15 minuta</option>
                    <option {{ $order->time == 20 ? 'selected' : '' }} value="20">20 minuta</option>
                    <option {{ $order->time == 25 ? 'selected' : '' }} value="25">25 minuta</option>
                    <option {{ $order->time == 30 ? 'selected' : '' }} value="30">30 minuta</option>
                    <option {{ $order->time == 40 ? 'selected' : '' }} value="40">40 minuta</option>
                    <option {{ $order->time == 50 ? 'selected' : '' }} value="50">50 minuta</option>
                    <option {{ $order->time == 60 ? 'selected' : '' }} value="60">60 minuta</option>
                </select>
            </div>
            <button class="btn btn-danger btn-block">Pošalji</button>
        </form>
    </div>   

<div class="col-lg-8">
    
    <h3 class="mb-3">Lista Proizvoda</h3>
    <div class="line"></div>

    <table class="table text-center">
        <tr>
            <th></th>
            <th>IME(Veličina) </th>
            <th>Dodaci</th>
            <th>KOLIČINA</th>
            <th class="text-right">CIJENA PO JEDINICI</th>
        </tr>

        @foreach ($order->products as $product)
            <tr>
                <td><img height="80px" src="/{{$product->image}}"></td>
                <td>
                    <strong>{{$product->name}}</strong><br>    
                    <p>{{$product->pivot->size}}</p>    
                </td>        
                <td>         
                    {{-- <h1>{{$product->pivot->addons}}</h1> --}}
                    @if ( $product->pivot->addons == 'null')
                        /
                    @else
                        @foreach (json_decode($product->pivot->addons) as $addon)
                            <p>{{ $addon }}</p>
                        @endforeach 
                    @endif           
                </td>                     
                <td>{{$product->pivot->quantity}}</td>
                <td class="text-right"><strong >{{$product->pivot->price}}</strong></td>
            <td>
                <a target="_blanc" title="Pogledaj u prodavnici" href="/product/{{$product->slug}}"><i class="fas fa-eye"></i></a>
            </td>
            </tr>
        @endforeach  
    </table> 
</div>{{-- card body  --}}

@endsection