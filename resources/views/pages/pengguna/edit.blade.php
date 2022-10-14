@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Pendaftaran Penerima Donasi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pengguna.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <input id="role_id" type="hidden" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="3" required autocomplete="role_id" autofocus>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no_telpon" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="no_telpon" type="tezt" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ $user->no_telpon }}" required autocomplete="no_telpon">

                                @error('no_telpon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="usia" class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                            <div class="col-md-6">
                                <input id="usia" type="number" class="form-control @error('usia') is-invalid @enderror" name="usia" value="{{ $user->usia }}" required autocomplete="usia" autofocus>

                                @error('usia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus>

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
                                <input id="kec_domisili" type="text" class="form-control @error('kec_domisili') is-invalid @enderror" name="kec_domisili" value="{{ $user->kec_domisili }}" required autocomplete="kec_domisili" autofocus>

                                @error('kec_domisili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="nomor_kk" class="col-md-4 col-form-label text-md-end">{{ __('Nomor KK') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_kk" type="number" class="form-control @error('nomor_kk') is-invalid @enderror" name="nomor_kk" value="{{ $user->nomor_kk }}" required autocomplete="nomor_kk" autofocus>

                                @error('nomor_kk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
