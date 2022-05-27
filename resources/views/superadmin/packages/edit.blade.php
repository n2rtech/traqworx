@extends('layouts.superadmin')
@section('title', 'Package | Edit')
@section('head')
    @include('superadmin.sections.datatables.css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Traqworx</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('superadmin.packages.index') }}">Packages</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="uil uil-moneybag"></i> Edit Package</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-2">
                <div class="float-right">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ url()->previous() }}">Back</a>
                    <button class="btn btn-sm btn-outline-success" href="javascript: void(0);">Update</button>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')

@endpush
