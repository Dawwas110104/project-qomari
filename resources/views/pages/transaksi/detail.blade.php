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
                  {{ $data->bukti_tf }}
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
                                        <td class="ps-0 fw-medium">Bulan</td>
                                        <td class="pe-0 fw-bold text-end">{{ $data->nominal }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row row-cols-lg-auto g-3 align-items-center">
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

@section('script')
    <script>
        
    </script>
@endsection
