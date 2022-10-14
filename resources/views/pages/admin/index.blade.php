@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Row #3 -->
    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('pengguna.index') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-user-tie fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Donatur</div>
                        <div class="text-muted">Your main list is growing!</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('penerimadonasi.index') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-children fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Anak Yatim</div>
                        <div class="text-muted">Your main list is growing!</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('transaksi.index') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-money-bill-transfer fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Transaksi</div>
                        <div class="text-muted">Your main list is growing!</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Row #3 -->
</div>
@endsection
