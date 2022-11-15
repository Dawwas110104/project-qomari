@extends('layouts.app')

@section('content')
<main id="main-container">
    <!-- Page Content -->
    <!-- User Info -->
    <div class="bg-image bg-image-bottom" style="background-image: url('{{ asset('assets/media/photos/photo13@2x.jpg') }}');">
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
            <!-- <h2 class="h5 fw-medium text-white-75">
            Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
            </h2> -->
            <!-- END Personal -->

            <!-- Actions -->
            <!-- <button type="button" class="btn btn-primary me-1">
            <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
            </button> -->
            <a class="btn btn-alt-primary" href="{{ route('penerimadonasi.edit', $data->id) }}">
            <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
            </a>
            <!-- END Actions -->
        </div>
        </div>
    </div>
    <!-- END User Info -->

    <!-- Main Content -->
    <div class="content">
        <h2 class="content-heading d-flex justify-content-between align-items-center">
            <span class="fw-semibold"><i class="si si-users me-1"></i> Data Pribadi</span>
        </h2>
        <div class="content">
            <!-- Addresses -->
            <div class="row items-push">
                <!-- Billing Address -->
                <div class="col-md-4">
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
                        <!-- <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
                        <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a> -->
                    </address>
                    </div>
                </div>
                </div>
                <!-- END Billing Address -->

                <!-- Shipping Address -->
                <div class="col-lg-8">
                    <div class="block block-rounded h-100 mb-0">
                        <div class="block-header block-header-default bg-body-light">
                            <h3 class="block-title">Informasi  Donasi</h3>
                        </div>
                        <div class="block-content">
                            <table>
                                <tr>
                                    <td>
                                        Belum ada donatur
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="block block-content block-content-full block-content-sm bg-body-light text-end">
                            <form method="POST" action="{{ route('donatur.tambah-anak-asuh') }}">
                                @csrf
                                <input type="hidden" name="donatur_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button type="submit" class="btn btn-sm btn-primary">Tambah Anak Asuh</button>
                            </form><br>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Shipping Address -->
            </div>
            <!-- END Addresses -->
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ $data->name }}
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Alamat</th>
                                <th>Kecamatan Domisili</th>
                                <th>Akta Kematian Ibu</th>
                                <th>Akta Kematian Bapak</th>
                                <th>Nomor Rekening</th>
                                <th>Anak Asuh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->usia() }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->districts_name }}</td>
                                <td>
                                    <img src="{{ asset('akta_kematian_ibu/'.$data->akta_kematian_ibu) }}" style="width: 150px; height:150px;">
                                </td>
                                <td>
                                    <img src="{{ asset('akta_kematian_bapak/'.$data->akta_kematian_bapak) }}" style="width: 150px; height:150px;">
                                </td>
                                <td>{{ $data->rekening_bank }}</td>
                                <td>
                                    @if($data->donatur_id == Auth::user()->id)
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                    @else
                                    <form method="POST" action="{{ route('donatur.tambah-anak-asuh') }}">
                                        @csrf
                                        <input type="hidden" name="donatur_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <button type="submit" class="btn btn-sm btn-primary">Tambah Anak Asuh</button>
                                    </form><br>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
