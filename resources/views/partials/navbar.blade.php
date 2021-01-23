<div id="fixed">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="logo-wrapper">
                            <a href="/"><img src="/img/logo.png" alt="pizza 66 logo" class="img-fluid"></a>                            
                        </div>
                        <div class="user-wrapper nowrap">

                            @guest
                                <a href="{{route('login')}}" class="a-secondary nowrap"><i class="fas fa-sign-in-alt mr-1 enlarge-mobile" aria-hidden="true"></i><span class="hide-mobile">prijava</span></a>
                                
                                <a href="{{route('register')}}" class="a-secondary nowrap"><i class="fas fa-user-plus mr-1 enlarge-mobile"></i></i><span class="hide-mobile">registracija</span></a>
                            @endguest
                                
                            @auth      
                                @if ( auth()->user()->role == 'admin' )
                                    <a href="{{route('admin')}}" class="a-secondary nowrap"><i class="fas fa-user-cog mr-1 enlarge-mobile"></i><span class="hide-mobile">Admin</span></a>
                                @endif                          

                                <a href="{{route('userdata')}}" class="a-secondary nowrap"><i class="fas fa-user mr-1 enlarge-mobile" aria-hidden="true"></i><span class="hide-mobile">Moj nalog</span></a>
                                
                                <a class="a-secondary nowrap" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt mr-1 enlarge-mobile"></i><span class="hide-mobile">Odjava</span>
                                </a>
                                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endauth

                        </div>
                    </div>
                </div>   {{-- col-12  --}}
            </div>   {{-- row --}}
        </div>     {{-- container --}}
    </header>

    <nav id="navbar">
        <div class="container">
            <div class="wrapper">

                <div class="left hide-tablet">
                    <a href="tel:0616675241"><i class="fas fa-mobile-alt"></i><span class="hide-mobile">0616675241</span></a>
                </div>

                <div class="center">
                    <ul>
                        <div class="icon-wrapper">
                            <a href="/"><img src="/img/menu-icon.png" alt="pizza 66 logo"></a>                            
                        </div>
                        <a class="a-white small-mobile" href="{{route('pizza')}}">
                            <li class="{{ (request()->is('pizza')) ? 'secondary' : 'primary' }}">Pizza</li>
                        </a>
                        <a class="a-white small-mobile" href="{{route('bbq')}}">
                            <li class="{{ (request()->is('bbq')) ? 'secondary' : 'primary' }}">Roštilj</li>
                        </a>
                        {{-- <a class="a-white small-mobile" href="{{route('drinks')}}">
                            <li class="{{ (request()->is('drinks')) ? 'secondary' : 'primary' }}">Pića</li>
                        </a> --}}
                        <a class="a-white small-mobile nowrap hide-tablet" href="/about">
                            <li class="{{ (request()->is('about')) ? 'secondary' : 'primary' }}">O nama</li>
                        </a>
                    </ul>
                </div>
                
                <div class="right">
                    <a class="a-white nowrap" href="{{route('cart')}}"><i class="fas fa-shopping-cart" aria-hidden="true"></i> 
                        <span class="hide-mobile">Korpa</span>
                        <div class="count">{{Cart::count()}}</div>
                    </a>
                </div>
            </div>
        </div>  {{-- container  --}}
    </nav>

    {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/">Pizza</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">Roštilj</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Poslastice</a></li>
                <li class="nav-item"><a class="nav-link" href="/customers">Pića</a></li>
            </ul>

        </div>
    </nav> --}}

    <div class="container">
        <div class="message-wrapper">
            @include('partials.messages')
        </div>
    </div>
    <time-response order_id="{{ session('order_id') }}"></time-response>
</div>