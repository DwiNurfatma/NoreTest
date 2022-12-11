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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if(isset($karyawan))
                                        <td>{{ucfirst($karyawan->user->name)}}</td>
                                        <td>{{ucfirst($karyawan->user->email)}}</td>
                                        <td>{{ucfirst($karyawan->jk)}}</td>
                                        <td>{{ucfirst($karyawan->no_hp)}}</td>
                                        <td>{{ucfirst($karyawan->jabatan)}}</td>
                                        @else
                                        <td colspan="5">Tidak ada data</td>
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
@endsection