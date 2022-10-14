@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="content-heading">
        <div>Daftar Donatur</div>
    </h2>

    <!-- Full Table -->
    <div class="block block-rounded">
        <div class="block-content">
            <div class="content-header">
                <div class="space-x-1">
                    <form class="row g-3 align-items-center" method="GET" action="{{ route('pengguna.index') }}">
                        <div class="col-10">
                            <label class="visually-hidden" for="keyword">Email</label>
                            <input class="form-control" type="text" name="keyword" value="{{ $keyword }}">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                <div class="space-x-1">
                    <a class="align-items-center" href="{{ route('pengguna.create') }}" style="color: #fff;"><button class="btn btn-primary">+</button></a>
                </div>
            </div>
            

            <div class="table-responsive">
            <table class="table table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">
                    <i class="fa fa-user"></i>
                    </th>
                    <th>@sortablelink('name', 'Nama')</th>
                    <th style="width: 30%;">Nomor Telpon</th>
                    <th style="width: 30%;">Email</th>
                    <th class="text-center" style="width: 100px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td class="text-center"><img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt=""></td>
                        <td class="fw-semibold">{{ $data->name }}</td>
                        <td><span class="badge bg-primary">
                            <a target="_blank" href="https://wa.me/{{$data->no_telpon}}" style="color:#fff;">
                                {{ $data->no_telpon }}
                            </a>
                        </span></td>
                        <td>{{ $data->email }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                <a href="{{ route('pengguna.edit', $data->id) }}" style="color: #fff;">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                </button>

                                
                                <button class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                                <a href="{{ route('pengguna.destroy', $data->id) }}" onclick="event.preventDefault();
                                                document.getElementById('{{ $data->id }}').submit();" style="color: #fff;">
                                    <i class="fa fa-times"></i>
                                </a>
                                </button>
                                

                                <form id="{{ $data->id }}" action="{{ route('pengguna.destroy', $data->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $datas->links() }}
            </div>
        </div>
    </div>
    <!-- END Full Table -->
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="GET" action="{{ route('penerimadonasi.index') }}">
                <input type="text" name="keyword" value="{{ $keyword }}">
                <button type="submit" class="btn btn-success">Submit</button>
            </form><br>
            <div class="card">
                <div class="card-header">
                    {{ __('Daftar Anak Yatim') }}

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary position-absolute top-0 end-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        +
                    </button>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>@sortablelink('name', 'Nama')</th>
                                <th>@sortablelink('tanggal_lahir', 'Usia')</th>
                                <th>@sortablelink('kec_domisili', 'Kecamatan Domisili')</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->usia() }}</td>
                                <td>{{ $data->districts_name }}</td>
                                <td>
                                    <a href="{{ route('penerimadonasi.edit', $data->id) }}"><button class="btn btn-warning">Edit</button></a> 
                                    <a href="{{ route('penerimadonasi.destroy', $data->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('{{ $data->id }}').submit();">
                                                     <button class="btn btn-danger">Delete</button>
                                    </a>
                                    <form id="{{ $data->id }}" action="{{ route('penerimadonasi.destroy', $data->id ) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="{{ route('penerimadonasi.detail', $data->id) }}"><button class="btn btn-primary">Detail</button></a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- {{ $datas->links() }} -->
            <!-- {!! $datas->appends(Request::except('page'))->render() !!} -->
            {!! $datas !!}
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('penerimadonasi.store') }}" enctype="multipart/form-data">
    @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                    <div class="col-md-6">
                        <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

                        @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                    <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kec_domisili" class="col-md-4 col-form-label text-md-end">{{ __('Kecamatan Domisili') }}</label>

                    <div class="col-md-6">
                        <select name="kec_domisili" class="form-select col-md-6">
                            <option selected disabled></option>
                            @foreach($kec_domisilis as $kec_domisili)
                            <option value="{{ $kec_domisili->id }}">{{ $kec_domisili->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                </div>
                
                <div class="row mb-3">
                    <label for="nomor_kk" class="col-md-4 col-form-label text-md-end">{{ __('Nomor KK') }}</label>

                    <div class="col-md-6">
                        <input id="nomor_kk" type="number" class="form-control @error('nomor_kk') is-invalid @enderror" name="nomor_kk" value="{{ old('nomor_kk') }}" required autocomplete="nomor_kk" autofocus>

                        @error('nomor_kk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                    <div class="col-md-6">
                        <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="akta_kematian_ibu" class="col-md-4 col-form-label text-md-end">{{ __('Akta Kematian Ibu') }}</label>

                    <div class="col-md-6">
                        <input id="akta_kematian_ibu" type="file" class="form-control @error('akta_kematian_ibu') is-invalid @enderror" name="akta_kematian_ibu" value="{{ old('akta_kematian_ibu') }}" autocomplete="akta_kematian_ibu" autofocus>

                        @error('akta_kematian_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="akta_kematian_bapak" class="col-md-4 col-form-label text-md-end">{{ __('Akta Kematian Bapak') }}</label>

                    <div class="col-md-6">
                        <input id="akta_kematian_bapak" type="file" class="form-control @error('akta_kematian_bapak') is-invalid @enderror" name="akta_kematian_bapak" value="{{ old('akta_kematian_bapak') }}" autocomplete="akta_kematian_bapak" autofocus>

                        @error('akta_kematian_bapak')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <div class="row mb-0">
                <button type="submit" class="btn btn-primary">
                    {{ __('Tambah') }}
                </button>
            </div>
            </div>
        </div>
    </form>
  </div>
</div>

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
