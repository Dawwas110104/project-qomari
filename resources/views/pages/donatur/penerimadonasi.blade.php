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

<div class="block block-rounded">
    <div class="block-content">
        <div class="content-header">
            <div class="space-x-1">
                <form class="row g-3 align-items-center" method="GET" action="{{ route('penerimadonasi.index') }}">
                    <div class="col-10">
                        <label class="visually-hidden" for="keyword">Email</label>
                        <input class="form-control" type="text" name="keyword" value="{{ $keyword }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-magnifying-glass"></i></button>
                    </div>
                </form>
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
                <th style="width: 30%; text-align: center;">@sortablelink('tanggal_lahir', 'Usia')</th>
                <th style="width: 30%;">@sortablelink('kec_domisili', 'Kecamatan Domisili')</th>
                <th class="text-center" style="width: 100px;">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td class="text-center"><img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt=""></td>
                    <td class="fw-semibold">{{ $data->name }}</td>
                    <td style="text-align: center;">{{ $data->usia() }} Tahun</td>
                    <td>{{ $data->districts_name }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('donatur.anakasuh-detail', $data->id) }}" style="color: #fff;">
                                <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;">
                                    <i class="si si-info"></i>
                                </button>
                            </a>
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
@endsection

@section('script')
    <!-- <script>

    </script> -->
@endsection
