@extends('layouts.app')

@section('content')

<h2 class="content-heading">Template Email</h2>
<div class="row">
    <div class="block col-lg-8">
        <div class="block-content">
            <form class="mb-5" action="{{ route('transaksi.template.update') }}" method="POST">
            @csrf
                <div class="mb-4">
                    <!-- CKEditor Container -->
                    <textarea id="editor-template-email" name="template"><?=$template?></textarea>
                </div>
                <div class="ms-auto">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Perbarui') }}
                    </button>
                </div>
            </form>
        </div> 
    </div>
    <div class="block col-lg-4">
        <div class="block-content">
            <table class="table table-bordered table-vcenter">
            <thead>
                <th>Mapping</th>
                <th class="d-none d-sm-table-cell">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{donatur}</td>
                    <td class="d-none d-sm-table-cell">
                        Nama Donatur
                    </td>
                </tr>
                <tr>
                    <td>{telp}</td>
                    <td class="d-none d-sm-table-cell">
                        Nomor Telepon Donatur
                    </td>
                </tr>
                <tr>
                    <td>{email</td>
                    <td class="d-none d-sm-table-cell">
                        Email Donatur
                    </td>
                </tr>
                <tr>
                    <td>{anak}</td>
                    <td class="d-none d-sm-table-cell">
                        Nama Anak Yatim
                    </td>
                </tr>
                <tr>
                    <td>{bulan}</td>
                    <td class="d-none d-sm-table-cell">
                        Bulan Infaq
                    </td>
                </tr>
                <tr>
                    <td>{nominal}</td>
                    <td class="d-none d-sm-table-cell">
                        Nominal Infaq
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

<!-- END CKEditor -->
@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor-template-email' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection