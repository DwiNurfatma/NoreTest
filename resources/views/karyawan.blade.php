@extends('layouts_admin.app')
@section('content')
<style>
    label {
        color: white !important;
    }

    option {
        color: black;
    }

    .dataTables_info {
        color: white !important;
    }

    .paginate_button
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex" style="padding-top:1% !important;padding-bottom:1% !important">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data Karyawan</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none py-0 mb-3 mb-md-0">
                        <div class="breadcrumb">
                            <span class="breadcrumb-item active">Data Karyawan</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <button type="button" class=" mt-3 mb-1 btn btn-secondary" data-toggle="modal" data-target="#regisUser">
                                Tambah User <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a class=" mt-3 mb-1 btn btn-warning" href="{{ route('export') }}">Export Excel</a>
                        </div>
                        <div class="col-md-2">
                            <a class=" mt-3 mb-1 btn btn-primary" href="{{ route('export_pdf') }}">Export PDF</a>
                        </div>
                    </div>
                    <div class=" card">
                        <div class="pt-2 pr-1 pl-1 table-responsive table-dark col-sm-12 ">
                            <table id="table_id" class="table table-dark table-striped  table-striped table-border m-1 datatable-scroll-y" style="color:white">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $user)
                                    <tr>
                                        <td>{{ ++$no}}.</td>
                                        <td>{{ucfirst($user->name)}}</td>
                                        <td>{{ucfirst($user->email)}}</td>
                                        <td>{{ucfirst($user->role)}}</td>
                                        @if($user->email_verified_at !==NULL)
                                        <td><span class="bg-primary p-1">Active</span></td>
                                        @else
                                        <td><span class="bg-danger p-1">Non-Active</span></td>
                                        @endif
                                        <td class="text-center">
                                            <a class="btn btn-outline-success" href="/detail/{{ $user->id }}"><i class="fa-solid fa-eye"></i></a>
                                            <button class="btn btn-outline-info editbtn" value="{{$user->id}}"><i class="fa-solid fa-pen"></i></button>
                                            <button class="btn btn-outline-danger deletebtn" value="{{$user->id}}"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    @endforeach

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
        $('#table_id').DataTable();
        $(document).on('click', '.deletebtn', function() {
            var id = $(this).val();
            $('#deleteModal').modal('show');
            $('#deleting_id').val(id);
        });
        $(document).on('click', '.editbtn', function() {
            var id = $(this).val();
            $('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/data_edit/" + id,
                success: function(response) {
                    console.log(response.user.jk)
                    $('#id').val(response.user.id);
                    $('#name').val(response.user.name);
                    $('#email').val(response.user.email);
                }
            });
        });
    });


    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.table_id').DataTable();


        $('#save').click(function(e) {
            e.preventDefault();

            $.ajax({
                data: $('#userForm').serialize(),
                url: "{{ route('user_store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    $('#userForm').trigger("reset");
                    $('#regisUser').modal('hide');
                    /* table.draw(); */
                    location.reload();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
    });
</script>


<!-- Modal Update Barang-->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#e9ecef;color:black">
                <h5 class="modal-title">Update Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--FORM UPDATE BARANG-->
                <form action="/data_update" method="post">
                    @csrf

                    <input type="hidden" id="id" name="id"> <br />

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" required="required" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" required="required" class="form-control" name="email" id="email">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
                <!--END FORM UPDATE BARANG-->
            </div>
        </div>
    </div>
</div>
<!-- End Modal UPDATE Barang-->

<!-- add -->
<div class="modal fade" id="regisUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#e9ecef;color:black">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Karyawan </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="userForm" name="userForm" class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Nama</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" value="Upload" id="save" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end add -->

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

@endsection