@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ route('pengguna.index') }}"><button class="btn btn-warning">Pengguna</button></a>
                    <a href="{{ route('penerimadonasi.index') }}"><button class="btn btn-warning">Penerima Donasi</button></a>
                    <a href="{{ route('transaksi.index') }}"><button class="btn btn-warning">Transaksi</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
