@extends('layouts.app')

@section('content')
<h2 class="content-heading">
    <div>Daftar Donatur</div>
</h2>

<!-- Full Table -->
<div class="block block-rounded">
    <div class="block-content">
        <div class="content-header">
            <div class="space-x-1">
                <form class="row g-3 align-items-center" method="GET" action="{{ route('pengguna.index') }}">
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
                <a class="align-items-center" href="{{ route('pengguna.create') }}" style="color: #fff;"><button class="btn btn-primary">+</button></a>
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
                    <th style="width: 30%;">Nomor Telpon</th>
                    <th style="width: 30%;">Email</th>
                    <th class="text-center" style="width: 100px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center"><img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt=""></td>
                        <td class="fw-semibold">{{ $user->name }}</td>
                        <td><span class="badge bg-primary">
                            <a target="_blank" href="https://wa.me/{{$user->no_telpon}}" style="color:#fff;">
                                {{ $user->no_telpon }}
                            </a>
                        </span></td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                
                                <a href="{{ route('pengguna.edit', $user->id) }}" style="color: #fff;">
                                    <button class="btn btn-secondary">
                                        <i class="fa fa-pencil-alt"></i>                                  
                                    </button>
                                </a>

                                <form id="{{ $user->id }}" action="{{ route('pengguna.destroy', $user->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary show_confirm" data-bs-toggle="tooltip">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $users->links() }}
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
