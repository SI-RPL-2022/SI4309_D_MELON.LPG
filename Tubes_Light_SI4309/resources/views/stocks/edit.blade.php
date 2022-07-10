@extends('layouts.main')

@section('title')
    Update
@endsection

@section('Konten')

    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col">
                <form action="{{ route('stocks.update', [$stock->id]) }}" method="POST" class="form"
                    enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <label for="image" class="col-sm-2 col-form-label"></label> <br>
                    <img class="img-default" src="{{ asset('storage/' . $stock->image) }}" width="150px" height="300px" alt="gambar">
                    <input class="input-file" type="file" name="image" id="image" accept="image/*"> <br>
                    <label for="name" class="col-sm-2 col-form-label">Jenis Tabung</label>
                    <div class="col-sm-10">
                        <input readonly value="{{ $stock->name }}" placeholder="Contoh: 3kg" type="text" class="form-control"
                            id="name" name='name' autofocus>
                    </div>
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input value="{{ $stock->stock }}" placeholder="3 buah" type="number" class="form-control"
                            id="stock" name='stock' autofocus>
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Update</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
@endsection
