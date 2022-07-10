@extends('layouts.main')

@section('title')
    Pangkalan
@endsection

@section('Konten')
<div class="container text-center">
    <h3 class="mt-3">Data Pangkalan</h3>
    <img src="/foto/profile.jpg" style="width: 10rem">
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
</div>
<div class="container mt-5">
    <table>
        <tbody>
            <tr>
                <td>Nama</td>
                <td> :</td>
                <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td> :</td>
                <td>{{Auth::user()->phone}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> :</td>
                <td>{{Auth::user()->address}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
