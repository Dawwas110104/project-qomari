@extends('layouts.app')

@section('content')
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
                <th>@sortablelink('name', 'Nama Anak Asuh')</th>
                <th style="text-align: center;">@sortablelink('bulan', 'Bulan')</th>
                <th>@sortablelink('nominal', 'Nominal')</th>
                <th>@sortablelink('status', 'Status')</th>
                <th class="text-center" style="width: 100px;">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <td class="text-center"><img class="img-avatar img-avatar48" src="{{ asset('assets/media/avatars/avatar16.jpg') }}" alt=""></td>
                    <td class="fw-semibold">{{ $transaksi->name }}</td>
                    <td style="text-align: center;">{{ $transaksi->bulan }}</td>
                    <td>{{ $transaksi->nominal }}</td>
                    <td>
                        @if($transaksi->status == 1)
                            <span class="badge rounded-pill bg-success">Berhasil</span>
                        @else
                            <span class="badge rounded-pill bg-warning">Pengajuan</span>
                        @endif  
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('donatur.anakasuh-detail', $transaksi->id) }}" style="color: #fff;">
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

        {{ $transaksis->links() }}
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- <script>

    </script> -->
@endsection
