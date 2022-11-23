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
                        {{ $data->tanggal_lahir }}<br>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-vcenter">
                            <tbody>
                            @if(empty($data->donatur_id) )
                                <p>Belum ada donatur</p>
                            @else
                                @forelse($transaksis as $transaksi)
                                <tr>
                                    <td>
                                        {{ $transaksi->updated_at }}                 
                                    </td>
                                    <td>
                                        {{ $transaksi->donatur_name }}</>
                                    </td>
                                    <td class="text-end">Rp{{ $transaksi->nominal }}</td>
                                    <td>
                                        <span class="badge bg-success">Berhasil</span>
                                    </td>
                                </tr>
                                @empty
                                    <p>Belum ada transaksi</p>
                                @endforelse
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->
</main>
@endsection
