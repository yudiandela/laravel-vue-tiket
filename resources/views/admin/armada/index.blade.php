@extends('layouts.main')

@section('title', '- Armada list')

@push('styles')
<!-- Custom styles for this page -->
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Armada List') }}</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        {{ __('Cetak Laporan') }}
    </a>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-lg">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body">

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Perusahaan') }}</th>
                                <th>{{ __('Nomor Plat') }}</th>
                                <th>{{ __('Tipe') }}</th>
                                <th>{{ __('Trayek') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('Perusahaan') }}</th>
                                <th>{{ __('Nomor Plat') }}</th>
                                <th>{{ __('Tipe') }}</th>
                                <th>{{ __('Trayek') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($armadas as $armada)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $armada->nama }}</td>
                                <td>{{ $armada->perusahaan }}</td>
                                <td>{{ $armada->plat }}</td>
                                <td>{{ $armada->type }}</td>
                                <td>{{ $armada->trayek }}</td>
                                <td class="text-center">
                                    <a href="#" class="badge badge-success p-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="badge badge-danger p-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
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
@endsection


@push('scripts')
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
@endpush
