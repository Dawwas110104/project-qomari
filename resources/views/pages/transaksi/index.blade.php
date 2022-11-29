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
                    <th>Anak Yatim</th>
                    <th>Bulan</th>
                    <th>Nominal</th>
                    <th>Bukti Transfer</th>
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
                                <form id="{{ $data->id }}" action="{{ route('transaksi.destroy', $data->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-secondary show_confirm" style="border-radius: 0 !important;" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('transaksi.detail', $data->id) }}" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;">
                                        <i class="si si-info"></i>
                                    </button>
                                </a>
                                @if($data->status != 1)
                                <form id="{{ $data->id }}" action="{{ route('transaksi.destroy', $data->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-secondary show_confirm" style="border-radius: 0 !important;" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
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

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection
