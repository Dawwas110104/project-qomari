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
                                @foreach($transaksis as $transaksi)
                                <div id="accordion2" role="tablist" aria-multiselectable="true">
                                    <div class="block block-bordered block-rounded mb-2">
                                        <a class="fw-semibold block-header" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q{{ $transaksi->id }}" aria-expanded="true" aria-controls="accordion2_q{{ $transaksi->id }}" role="tab" id="accordion2_h1">
                                            <div class="block-options" style="padding: 0!important;">{{ $transaksi->bulan }}</div>
                                            <div class="block-options">
                                                <div class="block-options-item">
                                                    @if($transaksi->status)
                                                    <div class="alert alert-success py-2 mb-0">
                                                        <i class="fa fa-check-circle opacity-50 me-1"></i>
                                                    </div>
                                                    @else
                                                    <div class="alert alert-warning py-2 mb-0">
                                                        <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                        <div id="accordion2_q{{ $transaksi->id }}" class="collapse" role="tabpanel" aria-labelledby="accordion2_h1">
                                            <div class="block-content">
                                                @if($transaksi->status)
                                                <p>Uang infaq diterima sebesar {{ $transaksi->nominal }} pada {{ $transaksi->updated_at }}</p>
                                                @else
                                                <p>Uang infaq sebesar {{ $transaksi->nominal }} belum diserahkan</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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

@section('script')
    <script>
        // function deleteUser(){
        //     swal({
        //         title: "Error!",``
        //         text: "Here's my error message!",
        //         type: "error",
        //         confirmButtonText: "Cool"
        //    });
        // };

        // $('.delete-user').click( function(){
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Something went wrong!',
        //         footer: '<a href="">Why do I have this issue?</a>'
        //     });
        // })

        // Swal.fire({
        //     icon: 'error',
        //     title: 'Oops...',
        //     text: 'Something went wrong!',
        //     footer: '<a href="">Why do I have this issue?</a>'
        // });
    </script>
@endsection
