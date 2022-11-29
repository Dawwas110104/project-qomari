@extends('layouts.app')

@section('content')
<main id="main-container">
    <!-- Page Content -->
    <!-- User Info -->
    <div class="bg-image bg-image-bottom" style="background-image: url('{{ asset('assets/media/photos/photos13.jpg') }}');">
        <div class="bg-primary-dark-op py-4">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-3">
            <a class="img-link" href="#">
                <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
            </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white fw-bold mb-2">
            {{ $data->name }}
            </h1>
            <a class="btn btn-alt-primary" href="{{ route('penerimadonasi.edit', $data->id) }}">
            <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
            </a>
            <!-- END Actions -->
        </div>
        </div>
    </div>
    <!-- END User Info -->

    <h2 class="content-heading d-flex justify-content-between align-items-center">
        <span class="fw-semibold"><i class="si si-users me-1"></i> Data Pribadi</span>
    </h2>
    <!-- Addresses -->
    <div class="row items-push">
        <!-- Billing Address -->
        <div class="col-lg-4">
            <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Informasi Biodata</h3>
                </div>
                <div class="block-content fs-sm">
                    <div class="fw-bold mb-1">{{ $data->name }}</div>
                    <address>
                        {{ $data->tanggal_lahir }} ({{ $data->usia() }} Tahun)<br>
                        {{ $data->alamat }}<br>
                        {{ $data->districts_name }}<br><br>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Billing Address -->

        <!-- Shipping Address -->
        <div class="col-lg-8">
            <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Informasi  Donasi</h3>
                </div>
                <div class="block-content">
                    <p>Belum memiliki wali yatim</p>
                    <div class="row">
                      <div class="col-5"></div>
                      <div class="col-4"></div>
                      <div class="col-3">
                        <form method="POST" action="{{ route('donatur.tambah-anak-asuh') }}">
                            @csrf
                            <input type="hidden" name="donatur_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <button type="submit" class="js-swal-success btn btn-sm btn-primary">Tambah Anak Asuh</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->
</main>
@endsection
