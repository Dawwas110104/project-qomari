@extends('layouts.app')

@section('content')
<!-- Page Content -->
<h2 class="content-heading">Buat Tagihan Transaksi</h2>
    <!-- Horizontal -->
    <div class="block block-rounded">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <form class="mb-5" method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Donatur') }}</label>

                            <div class="col-md-6">
                                <select name="donatur_id" class="form-select col-md-6">
                                    <option selected disabled>Masukkan nama donatur</option>
                                    @foreach($donaturs as $donatur)
                                    <option value="{{ $donatur->id }}">{{ $donatur->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Nama Anak Yatim') }}</label>

                            <div class="col-md-6">
                                <select name="pd_id" class="form-select col-md-6">
                                    <option selected disabled>Masukkan nama anak yatim</option>
                                    @foreach($penerima_donasis as $penerima_donasi)
                                    <option value="{{ $penerima_donasi->id }}">{{ $penerima_donasi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Bulan') }}</label>

                            <div class="col-md-6">
                                <select name="bulan" class="form-select col-md-6">
                                    <option selected disabled>Masukkan bulan tagihan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="nominal" class="col-md-4 col-form-label text-md-end">{{ __('Nominal') }}</label>

                            <div class="col-md-6">
                                <input id="nominal" type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus placeholder="Masukkan nominal tagihan">
                                    @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            
                        </div>

                        <div class="col-sm-8 ms-auto">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Tambah') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- END Horizontal -->
</div>
<!-- END Page Content -->
@endsection