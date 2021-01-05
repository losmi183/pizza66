@extends('admin.layout')

@section('content')

<div class="card-header">
    <span class='admin-title mr-3'>Kreiraj Akciju</span>            
</div>

<div class="card-body">   

    <form method="POST" action="/admin/actions" enctype="multipart/form-data">
        @csrf

        {{-- Ime  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Ime Akcije</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Stara cena  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Stara Cena</label>

            <div class="col-md-6">
                <input id="old_price" type="text" class="form-control @error('old_price') is-invalid @enderror" name="old_price" value="{{ old('old_price') }}"  autocomplete="old_price" autofocus>

                @error('old_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Nova cena  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Nova Cena</label>

            <div class="col-md-6">
                <input id="new_price" type="text" class="form-control @error('new_price') is-invalid @enderror" name="new_price" value="{{ old('new_price') }}"  autocomplete="new_price" autofocus>

                @error('new_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Opis  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Opis</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- Slika  --}}
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Slika</label>

            <div class="col-md-6">                                  
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <small class="d-block text-dark"><span class="text-danger">*</span>Podržani formati: jpeg, png, jpg, gif, maksimalna veli;ina fajla: 5 Mb</small>
            </div>
        </div>

        <div class="col-md-6 offset-md-4">
            <button class="btn btn-danger">Sačuvaj</button>
            <a href="/admin/actions" class="btn btn-outline-secondary">Poništi</a>
        </div>

</div>

@endsection