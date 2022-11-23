@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="content-heading">
        <div>Data Transaksi</div>
    </h2>

    <!-- Full Table -->
    <div class="block block-rounded">
        <div class="block-content">
            <div class="content-header">
                <div class="space-x-1">
                    <form class="row g-3 align-items-center" method="GET" action="{{ route('transaksi.index') }}">
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
                    <a class="align-items-center" href="{{ route('transaksi.create') }}" style="color: #fff;"><button class="btn btn-primary">+</button></a>
                </div>
            </div>
            

            <div class="table-responsive">
            <table class="table table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">
                    <i class="fa fa-user"></i>
                    </th>
                    <th>Donatur</th>
                    <th style="">Anak Yatim</th>
                    <th style="">Bulan</th>
                    <th style="">Nominal</th>
                    <th style="">Bukti Transfer</th>
                    <th class="text-center" style="width: 100px;">Status</th>
                    <th class="text-center" style="width: 100px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <td class="text-center"><img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt=""></td>
                        <td class="fw-semibold">{{ $data->donatur_name }}</td>
                        <td>{{ $data->penerimadonasi_name }}</td>
                        <td>{{ $data->bulan }}</td>
                        <td>{{ $data->nominal }}</td>
                        <td>
                        @if($data->bukti_tf  == NULL)
                            Tidak ada masukan 
                        @else
                            {{ $data->bukti_tf }}
                        @endif
                        </td>
                        <td>
                        @if($data->status  == 0)
                            <span class="badge rounded-pill bg-warning">Proses</span>
                        @elseif( $data->status  == 1)
                            <span class="badge rounded-pill bg-success">Berhasil</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Ditolak</span>
                        @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                            @if($data->bukti_tf  == NULL)
                                <a href="{{ route('transaksi.destroy', $data->id) }}" onclick="event.preventDefault();
                                                document.getElementById('{{ $data->id }}').submit();" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </a>
                            @else
                                @if($data->status == 1)

                                @else
                                <a href="{{ route('transaksi.detail', $data->id) }}" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;">
                                        <i class="si si-info"></i>
                                    </button>
                                </a>
                                <a href="{{ route('transaksi.destroy', $data->id) }}" onclick="event.preventDefault();
                                                document.getElementById('{{ $data->id }}').submit();" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </a>
                                <form id="{{ $data->id }}" action="{{ route('transaksi.destroy', $data->id ) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @endif
                            @endif
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </div>
    <!-- END Full Table -->
</div>
@endsection

@section('script')
    <script>
        
    </script>
@endsection
