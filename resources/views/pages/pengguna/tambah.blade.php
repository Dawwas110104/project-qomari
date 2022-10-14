@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2 class="content-heading">Form Layouts</h2>

        <!-- Horizontal -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Tambah Donatur</h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-lg-8 col-xl-5">
                        <form class="mb-5" method="POST" action="{{ route('pengguna.store') }}">
                        @csrf
                            <input id="role_id" type="hidden" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="3" required autocomplete="role_id" autofocus>
                            
                            <div class="row mb-4">
                                <label for="name" class="col-sm-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-sm-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="no_telpon" class="col-sm-4 col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>

                                <div class="col-sm-8">
                                    <input id="no_telpon" type="tezt" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ old('no_telpon') }}" required autocomplete="no_telpon">

                                    @error('no_telpon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <label for="email" class="col-sm-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                                <div class="col-sm-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password" class="col-sm-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-sm-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password-confirm" class="col-sm-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-sm-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
        </div>
        <!-- END Horizontal -->

    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer">
    <div class="content py-3">
        <div class="row fs-sm">
        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
        </div>
        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
            <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase 5.3</a> &copy; <span data-toggle="year-copy"></span>
        </div>
        </div>
    </div>
    </footer>
    <!-- END Footer -->
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
