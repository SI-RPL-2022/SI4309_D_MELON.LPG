@extends('layouts.main')

@section('title')
    Pembelian
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
                <form action="{{ route('stocks.store') }}" method="POST" class="form"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="image" class="col-sm-2 col-form-label">Gambar</label> <br>
                    <img class="img-default" src="/foto/gas3kg.png') }}" width="80px" alt="gambar">
                    <input class="input-file" type="file" name="image" id="image" accept="image/*"> <br>
                    <label for="name" class="col-sm-2 col-form-label">Jenis Tabung</label>
                    <div class="col-sm-10">
                        <input placeholder="Contoh: 3kg" type="text" class="form-control" id="name" name='name' autofocus>
                    </div>
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input placeholder="3 buah" type="number" class="form-control" id="stock" name='stock' autofocus>
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <script src="/js/script.js"></script>
@endsection
