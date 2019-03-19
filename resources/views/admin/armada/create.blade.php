@extends('admin.layouts.main')

@section('title', '- Armada list')

@push('styles')
<!-- Custom styles for this page -->
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')

<!-- Content Row -->
<div class="row justify-content-center">

    <!-- Area Chart -->
    <div class="col-lg-6">
        <div class="card shadow mx-auto mb-4">
            <!-- Card Body -->
            <div class="card-body p-5">

                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">{{ __('Tambah Armada') }}</h1>
                </div>

                <form action="{{ route('admin.armada.store') }}" method="POST" class="user">
                    @csrf
                    <div class="form-group">
                        <input name="nama" type="text" class="form-control form-control-user{{ $errors->has('nama') ? ' is-invalid' : '' }}"
                            value="{{ old('nama') }}" id="namaArmada" placeholder="Nama Armada">
                        @if ($errors->has('nama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group">
                        <input name="perusahaan" type="text" class="form-control form-control-user{{ $errors->has('perusahaan') ? ' is-invalid' : '' }}"
                            value="{{ old('perusahaan') }}" id="perusahaanArmada" placeholder="Perusahaan">
                        @if ($errors->has('perusahaan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('perusahaan') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input name="plat" type="text" class="form-control form-control-user{{ $errors->has('plat') ? ' is-invalid' : '' }}"
                            value="{{ old('plat') }}" id="platArmada" placeholder="Nomor Plat">
                        @if ($errors->has('plat'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('plat') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input name="type" type="text" class="form-control form-control-user{{ $errors->has('type') ? ' is-invalid' : '' }}"
                            value="{{ old('type') }}" id="typeArmada" placeholder="Type">
                        @if ($errors->has('type'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input name="trayek" type="text" class="form-control form-control-user{{ $errors->has('trayek') ? ' is-invalid' : '' }}"
                            value="{{ old('trayek') }}" id="trayekArmada" placeholder="Trayek">
                        @if ($errors->has('trayek'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('trayek') }}</strong>
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-user btn-primary btn-block shadow-sm">
                        <i class="fas fa-save fa-sm text-white-50"></i>
                        {{ __('Simpan') }}
                    </button>
                </form>
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
