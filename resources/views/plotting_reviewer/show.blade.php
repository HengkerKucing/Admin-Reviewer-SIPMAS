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
                <h4 class="m-0">Plotting-Reviewer</h4>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                        {{-- Tambahkan breadcrumb jika diperlukan --}}
                    </ol> -->
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
                        <h5 class="m-0"></h5>
                        <div class="card-tools">
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatable-plotting" class="table table-bordered table-striped ">
                            <tr>
                                <th>Judul Usulan :</th>
                                <td><strong>{{$show_plotting_reviewer[0]->usulan->usulan_judul ?? ''}}</strong></td>
                            </tr>
                            <tr>
                                <th>Anggota :</th>
                                <td>
                                    @php
                                        $data = $show_plotting_reviewer[0]->usulananggotamhs ?? [];
                                    @endphp
                                    @foreach ($data as $mhs) 
                                        {{"- " . $mhs->mahasiswa->mhs_nama}}<br>
                                    @endforeach
                                </td>
                                </td>
                        </table>
                        <br>
                        <table id="datatable-plotting2" class="table table-bordered table-striped">
                            @php
                                $data = [
                                    'Review Tahap Proposal',
                                    'Review Tahap Laporan Kemajuan',
                                    'Review Tahap Laporan Akhir'
                                ];
                            @endphp
                            @foreach ($data as $i)
                                <tr>
                                    <th colspan="2">{{$i}}</th>
                                </tr>
                                <tr>
                                    <td>Reviewer 1</td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example">
                                            <option disabled selected value>Pilih Dosen</option>
                                            @foreach ($dosen as $dsn)
                                                <option value="{{$dsn->dosen_id}}">{{$dsn->dosen_nama_lengkap}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reviewer 2</td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example">
                                            <option disabled selected value>Pilih Dosen</option>
                                            @foreach ($dosen as $dsn)
                                                <option value="{{$dsn->dosen_id}}">{{$dsn->dosen_nama_lengkap}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <!-- Ikon Simpan -->
                        <button type="button" class="btn btn-primary mt-3"><i class="fas fa-save"></i> Simpan</button>
                    </div>
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
        "paging": false,
        "pageLength": 5,
        "pagingType": "numbers",
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "responsive": true
    });

    function validateReviewers(changedElement) {
        let valid = true;

        $('.reviewer1').each(function(index) {
            let reviewer1 = $(this).val();
            let reviewer2 = $('#reviewer2-stage' + index).val();

            if (reviewer1 && reviewer2 && reviewer1 === reviewer2) {
                alert('Reviewer 1 dan Reviewer 2 tidak boleh sama pada tahap yang sama.');

                if (changedElement.hasClass('reviewer1')) {
                    $(this).val(''); // Reset reviewer_1 to default
                } else {
                    $('#reviewer2-stage' + index).val(''); // Reset reviewer_2 to default
                }
                valid = false;
                return false; // Break the loop
            }
        });

        return valid;
    }

    function formatFormData() {
        let reviewer1Data = [];
        let reviewer2Data = [];

        $('.reviewer1').each(function(index) {
            let stage = $(this).attr('name').match(/\[([^\]]+)\]/)[1];
            let value = $(this).val();
            if (value) {
                let obj = {};
                obj[stage] = value;
                reviewer1Data.push(obj);
            }
        });

        $('.reviewer2').each(function(index) {
            let stage = $(this).attr('name').match(/\[([^\]]+)\]/)[1];
            let value = $(this).val();
            if (value) {
                let obj = {};
                obj[stage] = value;
                reviewer2Data.push(obj);
            }
        });

        return { reviewer_1: reviewer1Data, reviewer_2: reviewer2Data };
    }

    $('.reviewer1, .reviewer2').change(function() {
        validateReviewers($(this));
    });

    $('form').submit(function(e) {
        if (!validateReviewers($(''))) {
            e.preventDefault();
        } else {
            let formData = formatFormData();
            $('<input>').attr({
                type: 'hidden',
                name: 'reviewer_1',
                value: JSON.stringify(formData.reviewer_1)
            }).appendTo('form');

            $('<input>').attr({
                type: 'hidden',
                name: 'reviewer_2',
                value: JSON.stringify(formData.reviewer_2)
            }).appendTo('form');
        }
    });
});

</script>
@endpush