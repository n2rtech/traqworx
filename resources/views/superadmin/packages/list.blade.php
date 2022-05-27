@extends('layouts.superadmin')
@section('title', 'Packages')
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
                            <li class="breadcrumb-item active">Packages</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="uil uil-moneybag"></i> Packages
                        <span class="text-primary b-l pl-2 ml-2">{{ count($packages) }}</span>
                        <span class="font-12 text-muted ml-1">Total Packages</span>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-2">
                <div class="float-right">
                    <a class="btn btn-sm btn-outline-warning" href="javascript:void(0)" id="filter">Filters</a>
                    <a class="btn btn-sm btn-outline-success" href="{{ route('superadmin.packages.create') }}">Create</a>
                </div>
            </div>
            @include('superadmin.packages.filter')
        </div>

        <table id="dataTable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Billing Type</th>
                    <th>Price</th>
                    <th>Perks</th>
                    <th>Modules</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{ $package->id }}</td>
                        <td>{{ $package->name }}</td>
                        <td>{{ ucfirst($package->billing_type) }}</td>
                        <td>$ {{ $package->price }}</td>
                        <td>
                            Storage <span class="float-right"> {{ $package->storage }} GB</span><br>
                            Projects <span class="float-right">{{ $package->projects }}</span><br>
                            Tasks <span class="float-right">{{ $package->tasks }}</span><br>
                            Team Members <span class="float-right">{{ $package->users }}</span><br>
                        </td>
                        <td>
                            @foreach ($package->modules as $module)
                                <i class="mdi mdi-check-bold text-success"></i> {!! ucfirst(str_replace('_', ' ', $module)) !!} <br>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('superadmin.packages.edit', $package->id) }}"
                                class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-placement="top"
                                data-original-title="Edit"><i class="uil-pen"></i></a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                data-placement="top" data-original-title="Delete"><i class="uil-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    @include('superadmin.sections.datatables.scripts')
    <!-- Filter Box Scripts Start -->
    <script>
        $(document).ready(function(){
            var filterBox = '{{ $filter_box }}';
            if(filterBox === 'show'){
                $("#filterBox").css('display', 'block');
            }

            $("#filter").click(function(){
                $("#filterBox").slideToggle();
            });

        });
    </script>
    <!-- Filter Box Scripts End -->
@endpush
