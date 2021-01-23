@extends('layouts.app')

@section('content')
    <section id="info">
        <div class="container">
            <div class="wrapper">
                <h1 class="title-primary text-left">Najčešća pitanja</h1>
                <hr>
                <ul>
                    <li>
                        <strong>Da li mogu da poručim putem ove aplikacije?</strong>
                        <p>Putem Pizza 66 web aplikacije možete poručiti pice i roštilj sa menija</p>                        
                    </li>
                    <li>
                        <strong>Da li je registracija obavezna?</strong>
                        <p>Možete poručiti bez registracije, ali preporučujemo da se registrujete i unesete podatke za dostavu, kako bi ste u buduće lakše i brže poručivali.</p>
                    </li>

                    <li>
                        <strong>Šta ako ne dobijem to što sam poručio?</strong>
                        <p>Sve porudzbine koje nisu po standardu mogu se vratiti i dobiti u zamenu porudzbenicu po standardu!</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection