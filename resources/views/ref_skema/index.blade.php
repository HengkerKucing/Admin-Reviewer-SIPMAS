@extends('layouts.app')
@push('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Referensi Skema</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                        <table id="datatable-main" class="table table-bordered table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Skema</th>
                                    <th>Kode Skema</th>
                                    <th>Periode (Tahun)</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach ($skema as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->trx_skema_nama }}</td>
                                            <td>{{ $item->trx_skema_kode }}</td>
                                            <td>{{ $item->periode_tahun }}</td>

                                            <td>
                                                <button type="button" class="btn btn-block btn-sm btn-outline-info"
                                                    data-toggle="dropdown"><i class="fas fa-cog"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                    <a class="dropdown-item"
                                                        href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
@endpush