
@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Row #3 -->
    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('donatur.transaksi') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-money-bill-transfer fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Transaksi</div>
                        <!-- <div class="text-muted">Your main list is growing!</div> -->
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('donatur.anak-asuh') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-hands-holding-child fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Anak Asuh</div>
                        <!-- <div class="text-muted">Your main list is growing!</div> -->
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a class="block block-rounded block-link-rotate" href="{{ route('donatur.list') }}">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="fa fa-children fa-4x text-primary"></i>
                        </div>
                        <div class="fs-4 fw-semibold">Anak Yatim</div>
                        <!-- <div class="text-muted">Your main list is growing!</div> -->
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Row #3 -->
</div>
@endsection


