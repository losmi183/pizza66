<div class="message">

        
    @if(session('success'))
        <div class="alert-flash">
            <i class="fas fa-check-square"></i>
            {{session('success')}}
        </div>
    @endif


    @if(count($errors) > 0)                   
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    
    @if(session('error'))
        <div class="alert-flash alert-error">
            <i class="fas fa-stop-circle"></i>
            {{session('error')}}
        </div>
    @endif

</div>

