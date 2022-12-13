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
                        Donatur     : {{ $data->donatur }}<br>
                        No Rekening : {{ $data->rekening_bank }}<br>
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

        <div class="col-lg-6 h-50">
            <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Akta Kematian Bapak</h3>
                </div>
                <div class="block-content">
                @if(!empty($data->akta_kematian_bapak))
                    <div class="items-push js-gallery img-fluid-100">
                        <div class="animated fadeIn">
                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="/akta_kematian_bapak/{{ $data->akta_kematian_bapak }}">
                            <img class="img-fluid" src="/akta_kematian_bapak/{{ $data->akta_kematian_bapak }}" alt="">
                        </a>
                        </div>
                    </div>
                @else
                    Tidak ada file
                @endif
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Akta Kematian Ibu</h3>
                </div>
                <div class="block-content">
                @if(!empty($data->akta_kematian_ibu))
                    <div class="items-push js-gallery img-fluid-100">
                        <div class="animated fadeIn">
                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="/akta_kematian_ibu/{{ $data->akta_kematian_ibu }}">
                            <img class="img-fluid" src="/akta_kematian_ibu/{{ $data->akta_kematian_ibu }}" alt="">
                        </a>
                        </div>
                    </div>
                @else
                    Tidak ada file
                @endif
                </div>
            </div>
        </div>
        
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->
</main>
@endsection

@section('js')
    <!-- jQuery (required for Magnific Popup plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>Codebase.helpersOnLoad(['jq-magnific-popup']);</script>
@endsection
