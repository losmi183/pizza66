<div >
    <header >
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

    <div class="container">
        <div class="message-wrapper">
            @include('partials.messages')
        </div>
    </div>
</div>