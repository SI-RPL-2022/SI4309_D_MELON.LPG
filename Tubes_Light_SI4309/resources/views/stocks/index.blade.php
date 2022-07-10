@extends('layouts.main')

@section('title')
    Stock
@endsection

@section('Konten')
    <h3 class="text-center mt-3">Stok Pangkalan</h3>
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
            @foreach ($stocks as $stock)
                <div class="col-sm-4 ">
                    <div class="card-mt-12" style="width: 9rem;">
                        <a href="{{ route('stocks.edit', [$stock->id]) }}" style="text-decoration: none">
                            <img src="{{ asset('storage/' . $stock->image) }}" width="200px" height="250px" class="card-img-top" >
                            <p class="fs-6 fw-bold text-dark">Stock Gas {{ $stock->name }} :</p>
                            <p  class="fs-6 text-dark text-center">{{ $stock->stock }}</p>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    @endsection
