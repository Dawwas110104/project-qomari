@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="content-heading">
        <div>Transaksi</div>
    </h2>

    <!-- Full Table -->
    <div class="block block-rounded">
        <div class="block-content">
            <!-- Labels on Top -->
          <div class="block block-rounded">
            <div class="block-content">
              <div class="row">
                <div class="col-lg-4">
                  <p class="text-muted">
                    @if(!empty($data->bukti_tf))
                    <div class="items-push js-gallery img-fluid-100">
                        <div class="animated fadeIn">
                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="/bukti_tf/{{ $data->bukti_tf }}">
                            <img class="img-fluid" src="/bukti_tf/{{ $data->bukti_tf }}" alt="">
                        </a>
                        </div>
                    </div>
                    @else
                        Bukti transfer belum diupload
                    @endif
                  </p>
                </div>

                <div class="col-lg-8 col-xl-5">
                    <!-- Order Summary -->
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <table class="table table-vcenter">
                                <tbody>
                                    <tr>
                                        <td class="ps-0 fw-medium">Donatur</td>
                                        <td class="pe-0 fw-medium text-end">{{ $data->nama_donatur }}</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 fw-medium">Anak Yatim</td>
                                        <td class="pe-0 fw-medium text-end">{{ $data->nama_penerimadonasi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 fw-medium">Bulan</td>
                                        <td class="pe-0 fw-bold text-end">{{ $data->bulan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0 fw-medium">Nominal</td>
                                        <td class="pe-0 fw-bold text-end">{{ $data->nominal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row row-cols-lg-auto g-3 align-items-center">
                    @if($data->status != 1)
                        <form  action="{{ route('transaksi.tolak', $data->id) }}" method="POST">
                            @csrf
                            <div>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </div>
                        </form>
                        <form  action="{{ route('transaksi.terima', $data->id) }}" method="POST">
                            @csrf
                            <div>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button type="submit" class="btn btn-success">Terima</button>
                            </div>
                        </form>
                    @endif
                    </div>
                    
                    <!-- END Order Summary -->
              </div>
              <!-- END Label on top Layout -->
            </div>
          </div>
          <!-- END Labels on Top -->
        </div>
    </div>
    <!-- END Full Table -->
</div>
@endsection

@section('js')
    <!-- jQuery (required for Magnific Popup plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>Codebase.helpersOnLoad(['jq-magnific-popup']);</script>
@endsection
