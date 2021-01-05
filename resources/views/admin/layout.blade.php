<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    
  
  {{-- Fontawsome Icons with my KIT CODE  --}}
  <script src="https://kit.fontawesome.com/7532718861.js"></script>
  
  <link rel="icon" href="{!! asset('/images/icon.png') !!}"/>
  <title>Admin | Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="/css/app.css" rel="stylesheet">

  {{-- Extra css  --}}
  @yield('extra-css')

</head>

<body>
    
    <!-- Top Navbar  -->
  <div id="top-area">
      <a style="text-decoration: none" href="/admin"><h3 class="mt-0 primary-color mr-3" >Pizza 66 Admin</h3></a> 
      <button title="hide/show sidebar" class="hamburger"><i class="fas fa-bars"></i></button>
  </div>


  <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar">

          <ul class="sidebar-list">
              <li class="sidebar-item"><a href="/admin"><i class="fas fa-tachometer-alt"></i></i>Admin</a></li>
              {{-- <li class="sidebar-item"><a href="/products"><i class="fab fa-product-hunt"></i>Proizvodi</a></li>
              <li class="sidebar-item"><a href="/categories"><i class="fas fa-cogs"></i>Kategorije</a></li> --}}
              <li class="sidebar-item"><a href="/admin/actions"><i class="fas fa-cogs"></i>Akcije</a></li>
              <li class="sidebar-item"><a href="/admin/orders"><i class="fas fa-shipping-fast"></i></i>Porudzbine</a></li>
              {{-- @if (superadminAccess()) --}}
                <li class="sidebar-item"><a href="/admin/users"><i class="fas fa-cogs"></i>Korisnici</a></li>
              {{-- @endif --}}
              <li class="sidebar-item"><a href="/"><i class="fas fa-home"></i>Sajt Početna</a></li>
              <li class="sidebar-item"><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Izloguj se</a></li>
          </ul>
  
      </div>
      <!-- /#sidebar-wrapper -->

      <div id="content">
          @include('admin.partials.messages')

            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="card">
                            
                            @yield('content')
                            
                        </div>
                    </div>
                </div>
            </div>


      </div>
  </div>

  <script src="/js/app.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  {{-- extra JS  --}}
  @yield('extra-js')

</body>

</html>
