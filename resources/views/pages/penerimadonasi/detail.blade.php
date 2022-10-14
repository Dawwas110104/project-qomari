@extends('layouts.app')

@section('content')
<div class="container">
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
                                <th>Nomor KK</th>
                                <th>NIK</th>
                                <th>Akta Kematian Ibu</th>
                                <th>Akta Kematian Bapak</th>
                                <th>Nomor Rekening</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->usia() }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->districts_name }}</td>
                                <td>{{ $data->nomor_kk }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>
                                    <img src="{{ asset('akta_kematian_ibu/'.$data->akta_kematian_ibu) }}" style="width: 150px; height:150px;">
                                </td>
                                <td>
                                    <img src="{{ asset('akta_kematian_bapak/'.$data->akta_kematian_bapak) }}" style="width: 150px; height:150px;">
                                </td>
                                <td>{{ $data->rekening_bank }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
