@extends('layouts.app')

@section('content')
<!-- Page Content -->
<h2 class="content-heading">Ubah Data Donatur {{ $user->name }}</h2>
    <!-- Horizontal -->
    <div class="block block-rounded">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <form class="mb-5" method="POST" action="{{ route('pengguna.update', $user->id) }}">
                    @csrf
                        <input id="role_id" type="hidden" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="2" required autocomplete="role_id" autofocus>
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
