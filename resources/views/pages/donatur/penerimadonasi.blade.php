@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Daftar Donatur') }}
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
                                    <a href="{{ route('donatur.detail', $data->id) }}"><button class="btn btn-warning">Detail</button></a> 
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
@endsection

@section('script')
    <!-- <script>

    </script> -->
@endsection
