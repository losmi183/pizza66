@include('partials.header')

@include('partials.navbar-checkout')

<div class="space-30"></div>

<section id="cart">
    <div class="container">        
        <div class="table-wrapper">      
            
            <div class="space-100"></div>
            
            <h1 class="title-primary">Plaćanje</h1>
            <div class="container"><hr></div>      

        <form action="{{route('checkout')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">           
                            
                    {{-- Ime  --}}
                    <div class="form-group">
                        <label class="">Ime i prezime <span class="text-danger">*</span></label>        
                        <input type="text" class="form-control @error('ime') is-invalid @enderror" name="ime" value="{{ old('ime') ?? ($user ? $user->name : '') }}"  autocomplete="ime" autofocus>    
                        @error('ime')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>

                    {{-- Email  --}}
                    <div class="form-group">
                        <label class="">Email</label>        
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? ($user ? $user->email : '') }}"  autocomplete="email" autofocus>    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>

                    {{-- Adresa  --}}
                    <div class="form-group">
                        <label class="">Adresa <span class="text-danger">*</span></label>        
                        <input type="text" class="form-control @error('adresa') is-invalid @enderror" name="adresa" value="{{ old('adresa') ?? ($user ? $user->address : '') }}"  autocomplete="adresa" autofocus>    
                        @error('adresa')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>

                    {{-- Telefon  --}}
                    <div class="form-group">
                        <label class="">Telefon <span class="text-danger">*</span></label>        
                        <input type="number" class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') ?? ($user ? $user->phone : '') }}"  autocomplete="telefon" autofocus>    
                        @error('telefon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>

                    {{-- Grad  --}}
                    <div class="form-group">
                        <label class="">Mesto</label>        
                        <input type="text" class="form-control @error('mesto') is-invalid @enderror" name="mesto" value="{{ old('mesto') ?? ($user ? $user->city : '') }}"  autocomplete="mesto" autofocus>    
                        @error('mesto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>
                    
                    {{-- Dodatne napomene  --}}
                    <div class="form-group">
                        <label class="">Dodatne napomene</label>        
                        <textarea name="napomene" class="form-control @error('napomene') is-invalid @enderror"  cols="30" rows="5" name="napomene">{{ old('napomene') }}</textarea>
                        @error('napomene')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                  
                    </div>                        
                </div>                {{-- .col --}}
                
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="order-data border p-3">
                        <h3 class="title-primary-sm mb-4">Vaša porudzbina</h3>

                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold">Proizvod</p>
                            <p class="font-weight-bold text-right">Ukupno</p>
                        </div>
                        <hr>

                        @foreach (Cart::content() as $item)
                            <div class="d-flex justify-content-between">
                                <p>{{ $item->name }} x {{ $item->qty }}</p>
                                <p>{{ $item->price * $item->qty }}</p>
                            </div>                    
                        @endforeach
                        <hr>
                        <div class="d-flex justify-content-between mb-5">
                            <h3 class="font-weight-bold">Ukupno</h3>
                            <h3 class="">{{ Cart::subtotal() }} RSD</h3>
                        </div>

                        <p class="mb-3">Dostava je besplatna za Omoljicu, Ivanovo, Starčevo i Brestovac.</p>
                        
                        <input type="checkbox" id="accept" value="false">
                        <label>Slažem se sa uslovima korišćenja *
                        </label><br>

                        <button id="submit-disabled" disabled class="btn btn-danger btn-block not-allowed">Poruči</button>
                        <button id="submit-enabled" class="btn btn-danger btn-block m-0">Poruči</button>

                    </div>
                    <p class="mt-1">Sva polja obeležena sa ( <span class="text-danger">*</span> ) su obavezna.</p>
                </div>       {{-- Col  --}}
            </div>            {{-- Row --}}     
        </form>

        </div>              <!-- MAin wrapper  -->
    </div>          <!-- container  -->
</section>

<div class="space-50"></div>
    

<script>
    $(document).ready(function() {            
        $('#accept').click(function() {
            if( $(this).prop('checked') == true ) {
                // $('#submit').prop('disabled', false);
                $('#submit-disabled').hide();
                $('#submit-enabled').show();
            }
            else {
        //         // $('#submit').prop('disabled', true);
                $('#submit-enabled').hide();
                $('#submit-disabled').show();
            }
        })
    });
</script>    

@include('partials.footer')
