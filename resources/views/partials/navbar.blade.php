<nav id="navbar" class="mb-5">
    <div class="container">
        <div class="wrapper">

            <div class="left hide-tablet">
                <a href="#"><i class="fas fa-truck"></i><span class="hide-mobile">Besplatna Dostava!</span></a>
            </div>

            <div class="center">
                <ul>
                    <div class="icon-wrapper">
                        <a href="/"><img src="/img/menu-icon.png" alt="pizza 66 logo"></a>                            
                    </div>
                    <a class="a-white small-mobile" href="{{route('pizza')}}"><li class="secondary">Pizza</li></a>
                    <a class="a-white small-mobile" href="{{route('drinks')}}"><li class="primary">Pića</li></a>
                    <a class="a-white small-mobile nowrap hide-tablet" href="#"><li class="primary">O nama</li></a>
                </ul>
            </div>
            
            <div class="right">
                <a class="a-white nowrap" href="{{route('cart')}}"><i class="fas fa-shopping-cart" aria-hidden="true"></i> 
                    <span class="hide-mobile">Korpa</span>
                    <div class="count">{{Cart::count()}}</div>
                </a>
            </div>
        </div>

    </div>
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