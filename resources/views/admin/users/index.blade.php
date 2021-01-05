@extends('admin.layout')

@section('content')

    
<div class="card-header">
    <span class='admin-title'>Registrovani korisnici</span>
</div>

<div class="card-body row">    

    <div class="col-12">    
        <table class="table">
            <tr>
                <th>#</th>
                <th>Ime i prezime</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Adresa</th>
                <th>Suma</th>
                <th>Status</th>
                <th></th>
            </tr>
            @foreach ($users as $user)
            <tr class=" {{setBgColor($user->role)}} ">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <form action="/admin/users/changeRole/{{$user->id}}" method="POST">
                        @csrf
                        <select onchange="this.form.submit()" name="role" class="form-control">
                            <option {{$user->role == 'admin' ? 'selected' : ''}} value="admin">Admin</option>
                            <option {{$user->role == 'customer' ? 'selected' : ''}} value="customer">Mušterija</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>        {{-- col-sm-10  --}}

    <div class="d-flex justify-content-center mb-3">
        {{$users->appends(request()->input())->links()}}
    </div>

</div>         {{-- Card body  --}}

@endsection

@section('extra-js')
    <script>
        $( document ).ready(function() {            


        });
    </script>    
@endsection