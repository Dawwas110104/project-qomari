@extends('layouts.app')

@section('content')
    <h2 class="content-heading">
        <div>Daftar Anak Yatim</div>
    </h2>

    <!-- Full Table -->
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

                <div class="space-x-1">
                    <a class="align-items-center" href="{{ route('penerimadonasi.create') }}" style="color: #fff;"><button class="btn btn-primary">+</button></a>
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
                        <td style="text-align: center;"><span class="badge bg-primary">{{ $data->usia() }} Tahun</span></td>
                        <td>{{ $data->districts_name }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                
                                <a href="{{ route('penerimadonasi.edit', $data->id) }}" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;">    
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                </a>
                            
                                <a href="{{ route('penerimadonasi.detail', $data->id) }}" style="color: #fff;">
                                    <button class="btn btn-sm btn-secondary" style="border-radius: 0 !important;">
                                        <i class="si si-info"></i>
                                    </button>
                                </a>                         
                                

                                <form id="{{ $data->id }}" action="{{ route('penerimadonasi.destroy', $data->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-secondary show_confirm" style="border-radius: 0 !important;" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
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
    <!-- END Full Table -->
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
