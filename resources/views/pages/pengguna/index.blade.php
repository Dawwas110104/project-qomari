@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="GET" action="{{ route('pengguna.index') }}">
                <input type="text" name="keyword" value="{{ $keyword }}">
                <button type="submit" class="btn btn-success">Submit</button>
            </form><br>
            <div class="card">
                <div class="card-header">
                    {{ __('Daftar Penerima Donasi') }}
                    <a href="{{ route('pengguna.create') }}" class="btn btn-primary position-absolute top-0 end-0">
                        +
                    </a>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary position-absolute top-0 end-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        +
                    </button> -->
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>@sortablelink('name', 'Nama')</th>
                                <th>Nomor Telpon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->no_telpon }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('pengguna.edit', $user->id) }}"><button class="btn btn-warning">Edit</button></a> 
                                    <a href="{{ route('pengguna.destroy', $user->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('{{ $user->id }}').submit();">
                                    <button class="btn btn-danger">Delete</button></a>
                                    

                                    <form id="{{ $user->id }}" action="{{ route('pengguna.destroy', $user->id ) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- {{ $users->links() }} -->
            <!-- {!! $users->appends(Request::except('page'))->render() !!} -->
            {!! $users !!}
        </div>
    </div>
</div>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('pengguna.store') }}">
    @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input id="role_id" type="hidden" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="3" required autocomplete="role_id" autofocus>
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
                    <label for="no_telpon" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>

                    <div class="col-md-6">
                        <input id="no_telpon" type="tezt" class="form-control @error('no_telpon') is-invalid @enderror" name="no_telpon" value="{{ old('no_telpon') }}" required autocomplete="no_telpon">

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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="usia" class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                    <div class="col-md-6">
                        <input id="usia" type="number" class="form-control @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus>

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
                        <input id="kec_domisili" type="text" class="form-control @error('kec_domisili') is-invalid @enderror" name="kec_domisili" value="{{ old('kec_domisili') }}" required autocomplete="kec_domisili" autofocus>

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
                        <input id="nomor_kk" type="number" class="form-control @error('nomor_kk') is-invalid @enderror" name="nomor_kk" value="{{ old('nomor_kk') }}" required autocomplete="nomor_kk" autofocus>

                        @error('nomor_kk')
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
