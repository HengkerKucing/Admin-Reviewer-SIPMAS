@extends('layouts.app')

@push('css')
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
                    <h4 class="m-0">Review Usulan</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Data Penelitian</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4 font-weight-bold">Nama Skema:</div>
                                <div class="col-md-8">{{ $skemaNama }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 font-weight-bold">Judul Usulan:</div>
                                <div class="col-md-8">{{ $usulanJudul }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4 font-weight-bold">Abstrak Usulan:</div>
                                <div class="col-md-8">{{ $usulanAbstrak }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Anggota</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Dosen:</div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Program Studi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($usulanPenelitian->anggotaDosen as $anggota)
                                            <tr>
                                                <td>{{ $anggota->dosen->dosen_nama }}</td>
                                                <td>{{ $anggota->dosen->prodi->prodi_nama }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Mahasiswa:</div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Program Studi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($usulanPenelitian->anggotaMahasiswa as $anggota)
                                            <tr>
                                                <td>{{ $anggota->mahasiswa->mhs_nama }}</td>
                                                <td>{{ $anggota->mahasiswa->prodi->prodi_nama }}</td>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Capaian</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Luaran Wajib</div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Jenis Luaran Wajib</th>
                                                <th>Luaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($usulanPenelitian->usulanLuaranWajib as $usulan)
                                            <tr>
                                                <td>{{ $usulan->luaranWajib->luaran_wajib_nama }}</td>
                                                <td>{{ $usulan->luaranWajib->luaran_wajib_slug }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Luaran Tambahan</div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Jenis Luaran Tambahan</th>
                                                <th>Luaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($usulanPenelitian->usulanLuaranTambahan as $usulan)
                                            <tr>
                                                <td>{{ $usulan->luaranTambahan->luaran_tambahan_nama }}</td>
                                                <td>{{ $usulan->luaranTambahan->luaran_tambahan_slug }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Luaran Tambahan</div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>IKU</th>
                                                <th>Target Pengusul</th>
                                                <th>Bukti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($usulanPenelitian->usulanIKU as $usulan)
                                            <tr>
                                                <td>{{ $usulan->iku->iku_nama }}</td>
                                                <td>{{ $usulan->iku->iku_target }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Komponen Pendanaan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Bahan habis pakai dan peralatan:</div>
                                <div class="col-md-9">{{ $luaranWajib }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Perjalanan:</div>
                                <div class="col-md-9">{{ $luaranTambahan }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Lain-lain:</div>
                                <div class="col-md-9">{{ $luaranTambahan }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3 font-weight-bold">Total Pendanaan:</div>
                                <div class="col-md-9">{{ $luaranTambahan }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Berkas Usulan</h5>
                        </div>
                        <!-- Berkas Usulan content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Styling -->
    @push('styles')
        <style>
            .flex {
                display: flex;
            }

            .items-col {
                flex-direction: column;
            }

            .mb-2 {
                margin-right: 5px;
                /*
                                /* width: auto; */
            }
        </style>
    @endpush
@endsection

@push('js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <!-- Tambahkan script JavaScript jika diperlukan -->
    <script>
        $(document).ready(function () {
            $('#datatable-main').DataTable({
                "paging": false, // Nonaktifkan paging
                "pageLength": 5, // Batasi jumlah baris yang ditampilkan menjadi 5
                "pagingType": "numbers", // Menggunakan angka halaman
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false, // Hapus "Showing 1 to 15 of X entries"
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
@endpush
