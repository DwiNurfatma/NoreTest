@extends('layouts_admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex" style="padding-top:1% !important;padding-bottom:1% !important">
                        @if(isset($karyawan))
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data {{$karyawan->user->name}}</h4>
                        @else
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data</h4>
                        @endif
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none py-0 mb-3 mb-md-0">
                        <div class="breadcrumb">
                            @if(isset($karyawan))
                            <span class="breadcrumb-item active">Data {{$karyawan->user->name}}</span>
                            @else
                            <span class="breadcrumb-item active">Data</span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-12">

                    <div class=" card">
                        <div class="pt-2 pr-1 pl-1 table-responsive table-dark col-sm-12 ">
                            <table id="table_id" class="table table-dark table-striped  table-striped table-border m-1 datatable-scroll-y" style="color:white">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Jabatan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ucfirst($user->name)}}</td>
                                        <td>{{ucfirst($user->email)}}</td>
                                        @if(isset($user->karyawan))
                                        <td>{{ucfirst($user->karyawan->jk)}}</td>
                                        <td>{{ucfirst($user->karyawan->no_hp)}}</td>
                                        <td>{{ucfirst($user->karyawan->jabatan)}}</td>
                                        <td> <button class="btn btn-outline-danger deletebtn" value="{{$user->id}}"><i class="fa-solid fa-trash"></i></button></td>
                                        @else
                                        <td colspan="3">Tidak ada data</td>
                                        <td>
                                            <button type="button" class=" mt-3 mb-1 btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                                Lengkkapi data <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </td>
                                        @endif
                                </tbody>
                            </table>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '.deletebtn', function() {
            var id = $(this).val();
            // alert(id);
            $('#deleteModal').modal('show');
            $('#deleting_id').val(id);
        });
    });
</script>

<!-- delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#e9ecef;color:black">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--FORM UPDATE BARANG-->
                <form action="/data_delete" method="post">
                    @csrf
                    @method('DELETE')
                    <h3>Anda yakin menghapus data ?</h3>
                    <input type="hidden" id="deleting_id" name="delete_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-primary">Hapus</button>
                    </div>
                </form>
                <!--END FORM UPDATE BARANG-->
            </div>
        </div>
    </div>
</div>
<!-- end delete -->
<!-- add -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#011126">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/user_store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select id="jk" name="jk" class=" col-md-4 form-control form-control-select2" data-container-css-class="border-teal" data-dropdown-css-class="border-teal" required>
                                <option value="laki-laki">Laki laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" required="required" class="form-control" name="jabatan" id="jabatan">
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="text" required="required" class="form-control" name="no_hp" id="no_hp">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" value="Upload" class="btn btn-outline-primary">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end add -->


@endsection