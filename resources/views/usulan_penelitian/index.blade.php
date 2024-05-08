@extends('layouts.app')


@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Usulan Penelitian</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                       
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>PTK</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>

    
    <section class="content">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-danger card-outline filter-container">
                        <div class="card-header">
                            <h1 class="card-title font-weight-bold">Filter</h1>
                        </div>
                        <div class="card-body">
                            <!-- Form filter -->
                            <form id="filter-form">
                                <div class="form-group">
                                    <label for="filter-title">Tahun:</label>
                                    <select class="form-control" id="filter-title">
                                        <option value="">-- Pilih tahun --</option>
                                        <!-- isi dengan data judul -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="filter-title">Skema:</label>
                                    <select class="form-control" id="filter-title">
                                        <option value="">-- Pilih Skema --</option>
                                        <!-- isi dengan data judul -->
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="filter-year">Status:</label>
                                    <select class="form-control" id="filter-year">
                                        <option value="">-- Pilih Status --</option>
                                        <!-- isi dengan data tahun -->
                                    </select>
                                </div>
                                <div>
                                    <label>Judul:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-main"></label>
                                </div>
                                <div>
                                    <label>Nama Anggota:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-main"></label>
                                </div>
                                <button type="submit" class="btn btn-danger">Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <!-- Kodingan di samping fitur filter -->
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>
                                            <p>PTK</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                                            <p>Bounce Rate</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>
                                            <p>User Registrations</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>Unique Visitors</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Kodingan di samping fitur filter -->
                            <table id="datatable-main" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Skema</th>
                                        <th>Anggota</th>
                                        <th>Pendanaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Skema</th>
                                        <th>Anggota</th>
                                        <th>Pendanaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usulan as $item)
                                    @foreach ($usulan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->usulan_judul }}</td>
                                            <td>{{ $item->skema->trx_skema_nama }}</td>
                                            <td>
                                                <!-- Isi dengan data anggota -->
                                            </td>
                                            <td>{{ $item->usulan_pendanaan }}</td>
                                            <td>
                                                <!-- Isi dengan status -->
                                            </td>
                                            <td>
                                                <div class="flex items-col">
                                                    <button type="button" class="btn btn-block btn-sm btn-outline-info mr-2" onclick="window.location.href = 'ref-skema-file'"><i class="fas fa-eye"></i></button>
                                                    <button type="button" class="btn btn-block btn-sm btn-outline-info mr-2" onclick="window.location.href = 'ref-skema-file'"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
@endsection


@push('js')
    <!-- Add your JavaScript here -->
    <!-- Add your JavaScript here -->
@endpush

