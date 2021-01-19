@include('partials.header')

<div id="app">

    @include('partials.navbar')
    
    <div class="space-250"></div>  

    {{-- Showing current session  --}}
    {{-- <h1 class="bg-primary text-white">{{ session('order_id') }}</h1> --}}

    @yield('content')
      
    <div class="space-100"></div>
    <h1 class="title-secondary">Informacije</h1>
    <div class="container"><hr style="background-color: orange; width: 50%;"></div>      
    <div class="space-50"></div>

    <section id="informations">
    <div class="container">
        <div class="row">

            <div class="col-4">
                <div class="box-simple">
                    <i class="fas fa-truck"></i>
                    <h3>Dostava</h3>
                    <p>Besplatna dostava za Omoljicu Ivanovo Brestovac i Starčevo</p>
                </div>
            </div>
            
            <div class="col-4">
                <div class="box-simple">
                    <i class="far fa-question-circle"></i>
                    <h3>Pitanja</h3>
                    <p>Najčešća pitanja i odgovori</p>
                </div>
            </div>
            
            <div class="col-4">
                <div class="box-simple">
                    <i class="fas fa-money-bill-wave"></i>
                    <h3>Plaćanje</h3>
                    <p>Uslovi i plaćanje</p>
                </div>
            </div>

        </div>
    </div>
    </section>

    <div class="space-50"></div>

</div>{{-- #app for vue.js  --}}

@include('partials.footer')

@yield('extra-js')