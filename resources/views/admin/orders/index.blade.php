@extends('admin.layout')

@section('content')

    
<div class="card-header">
    <span class='admin-title'>Porudzbine</span>
</div>

<pizza-ordered 
    id = {{ $lastOrder->id }}
    time = "{{ formatDate($lastOrder->created_at) }}" 
    name = {{ $lastOrder->ime }}
    phone = "{{ $lastOrder->telefon }}"
    {{-- address = {{ $lastOrder->adresa }} --}}
    sum = {{ $lastOrder->suma }}

></pizza-ordered>

<div class="card-body row">    
    <div class="col-xl-3" >
        <aside>
            <div class="card">
                <div class="card-header">
                    <h6>STATUS</h6>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
    
                        <input class="status-radio" type="radio" name="status" value=""  
                        @if (request()->query('status') == '')
                            checked
                        @endif >
                        <label for="male">Sve</label><br>
                        <input class="status-radio" type="radio" name="status" value="active" 
                        @if (request()->query('status') == 'active')
                            checked
                        @endif >
                        <label for="female">Aktivne</label><br>
                        <input class="status-radio" type="radio" name="status" value="finished"
                        @if (request()->query('status') == 'finished')
                            checked
                        @endif >
                        <label for="other">Isporučene</label>
            
                    </form>
                </div>
            </div> 
        </aside>
    </div>



    <div class="col-xl-9">    
        <table class="table">
            <tr>
                <th>#</th>
                <th>Datum</th>
                <th>Ime</th>
                {{-- <th>Email</th> --}}
                <th>Telefon</th>
                <th>Adresa</th>
                <th>Suma</th>
                <th>Status</th>
                <th></th>
            </tr>
            @foreach ($orders as $order)
            <tr class=" {{setBgColor($order->status)}} ">
                <td>{{$order->id}}</td>
                <td>{{ formatDate($order->created_at) }}</td>
                <td>{{$order->ime}} {{$order->prezime}}</td>
                {{-- <td>{{$order->email}}</td> --}}
                <td>{{$order->telefon}}</td>
                <td>{{$order->adresa}}</td>
                <td>{{$order->suma}} RSD</td>
                <td>
                    <form action="/admin/orders/status/{{$order->id}}" method="POST">
                        @csrf
                        <select onchange="this.form.submit()" name="status" class="form-control">
                            <option {{$order->status == 'active' ? 'selected' : ''}} value="active">Aktivna</option>
                            <option {{$order->status == 'finished' ? 'selected' : ''}} value="finished">Isporučena</option>
                        </select>
                    </form>
                </td>
                <td>
                    <a class="btn btn-secondary" href="/admin/orders/{{$order->id}}">Pogledaj</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>        {{-- col-sm-10  --}}

    <div class="d-flex justify-content-center mb-3">
        {{$orders->appends(request()->input())->links()}}
    </div>


    <audio id="audio" src="http://www.soundjay.com/button/beep-07.wav" autoplay="false" ></audio>
    <a onclick="playSound();"> Play</a>

</div>         {{-- Card body  --}}

@endsection

@section('extra-js')
    <script>

    //     function playSound() {
    //       var sound = document.getElementById("audio");
    //       sound.play();
    //   }


        window.onload = function() {
            var sound = document.getElementById("audio");
            sound.play();
        };


        $( document ).ready(function() {            

            // Form make get request with query string
            $('.status-radio').click(function() {
                var form = $(this).closest('form');
                form.submit();
            });
        });
    </script>    
@endsection
