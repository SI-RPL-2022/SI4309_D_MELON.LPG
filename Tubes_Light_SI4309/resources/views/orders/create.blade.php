@extends('layouts.main')

@section('title')
    Pembelian
@endsection

@section('Konten')

    <h3 class="text-center mt-3">Data Pembelian</h3>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-sm-11">
                <form class="ms-4" action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    {{-- Nama --}}
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="nama" name='name' autofocus>
                        </div>
                    </div>

                    {{-- Jenis Customer --}}
                    <div class="mb-3 row">
                        <label for="jenisCs" class="col-sm-3 col-form-label">Jenis Customer</label>
                        <div class="col mt-2">
                            <div class="form-check mb-2">
                                <input required value="UMKM" class="form-check-input" type="radio" name="customer_type"
                                    id="jenisCs1">
                                <label class="form-check-label" for="jenisCs1">
                                    UMKM
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input required value="Rumah Tangga" class="form-check-input" type="radio"
                                    name="customer_type" id="jenisCs1">
                                <label class="form-check-label" for="jenisCs1">
                                    Rumah Tangga
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input required value="Warung" class="form-check-input" type="radio" name="customer_type"
                                    id="jenisCs1">
                                <label class="form-check-label" for="jenisCs1">
                                    Warung
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Jenis Gas --}}
                    <div class="mb-3 row">
                        <label for="JenisGas" class="col-sm-3 col-form-label">Jenis LPG</label>
                        <div class="col mt-2">
                            @foreach ($stocks as $stock)
                                <div class="row ">
                                    <div class="col">
                                        <input class="form-check-input type" name="lpg_type[]" type="checkbox"
                                            id="{{ $stock->name }}" value="{{ $stock->name }}">
                                        <label class="form-check-label"
                                            for="{{ $stock->name }}">{{ $stock->name }}</label>
                                    </div>
                                    <div class="col">
                                        <input style="width: 100%" name="amount[]" disabled max="{{ $stock->stock }}"
                                        min="{{$stock->stock == 0 ? '0' : '1'}}" value="{{$stock->stock == 0 ? '0' : '1'}}" class="sum"
                                            placeholder="Jumlah" class="form-control" type="number">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- Jumlah --}}
                    <div class="mb-3 row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input readonly value="0" type="number" class="form-control" id="total" name="total">
                        </div>
                    </div>
                    <div class="tombol d-grid">
                        <button type="submit" class="btn btn-primary fw-bold" style="
                                                                        background: #0caf16 ;
                                                            
                                                                    ">Submit</button>
                    </div>
                </form>
            </div>
            <!-- <div class="col-sm-6">
                <div class="logo">
                    <img src="/foto/gas3kg.png" width="350px" class="m-5">
                </div>
                {{-- <p><img src="foto/logomelon-lpg.png" width="82px">MELON.LPG<p> --}}
            </div> -->
        </div>
    </div>
    <script src="/js/order.js"></script>
@endsection
