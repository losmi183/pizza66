@extends('admin.layout')

@section('content')

    
<div class="card-header">
    <span class='admin-title'>Akcije</span>
    <a href="/admin/actions/create" class="btn btn-outline-danger ml-3">Kreiraj novu akciju</a>
</div>

<div class="card-body row">    

    <div class="col-12">    
        <table class="table">
            <tr>
                <th>#</th>
                <th>Naziv</th>
                <th>Stara Cena</th>
                <th>Nova Cena</th>
                <th>Opis</th>              
                <th>Status</th>              
                <th>Slika</th>              
                <th></th>              
            </tr>
            @foreach ($actions as $action)
            <tr class=" {{setBgColor($action->status)}} ">
                <td>{{$action->id}}</td>
                <td>{{$action->name}}</td>
                <td>{{$action->old_price}}</td>
                <td>{{$action->new_price}}</td>
                <td>{{$action->description}}</td>
                <td>
                    <form action="/admin/actions/changeStatus/{{$action->id}}" method="POST">
                        @csrf
                        <select onchange="this.form.submit()" name="status" class="form-control">
                            <option {{$action->status == 'active' ? 'selected' : ''}} value="active">Aktivna</option>
                            <option {{$action->status == 'passed' ? 'selected' : ''}} value="passed">Završena</option>
                        </select>
                    </form>
                </td>
                <td><img height="100px" src="{{asset($action->image)}}" alt=""></td>
                <td>
                    <form action="/admin/actions/{{$action->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Obriši</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>        {{-- col-sm-10  --}}

    {{-- <div class="d-flex justify-content-center mb-3">
        {{$users->appends(request()->input())->links()}}
    </div> --}}

</div>         {{-- Card body  --}}

@endsection

@section('extra-js')
    <script>
        $( document ).ready(function() {            


        });
    </script>    
@endsection