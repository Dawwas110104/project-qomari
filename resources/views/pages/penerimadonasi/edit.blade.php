@extends('layouts.app')

@section('content')
<!-- Page Content -->
<h2 class="content-heading">Ubah Data Anak Yatim {{ $data->name }}</h2>
    <!-- Horizontal -->
    <div class="block block-rounded">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <form class="mb-5" method="POST" action="{{ route('penerimadonasi.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>

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
                                <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>

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
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}" required autocomplete="alamat" autofocus>

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
                                    <option selected value="{{ $data->districts_id }}">{{ $data->districts_name }}</option>
                                    @foreach($kec_domisilis as $kec_domisili)
                                    <option value="{{ $kec_domisili->id }}">{{ $kec_domisili->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="nomor_kk" class="col-md-4 col-form-label text-md-end">{{ __('Nomor KK') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_kk" type="number" class="form-control @error('nomor_kk') is-invalid @enderror" name="nomor_kk" value="{{ $data->nomor_kk }}" required autocomplete="nomor_kk" autofocus>

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
                                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $data->nik }}" required autocomplete="nik" autofocus>

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
                                <input id="akta_kematian_ibu" type="file" class="form-control @error('akta_kematian_ibu') is-invalid @enderror" name="akta_kematian_ibu" value="{{ $data->akta_kematian_ibu }}" autocomplete="akta_kematian_ibu" autofocus>

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
                                <input id="akta_kematian_bapak" type="file" class="form-control @error('akta_kematian_bapak') is-invalid @enderror" name="akta_kematian_bapak" value="{{ $data->akta_kematian_bapak }}" autocomplete="akta_kematian_bapak" autofocus>

                                @error('akta_kematian_bapak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-8 ms-auto">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Perbarui') }}
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
