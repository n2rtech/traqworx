@extends('layouts.superadmin')
@section('title', 'Admins')
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
                            <li class="breadcrumb-item"><a href="{{ route('superadmin.dashboard') }}">Traqworx</a></li>
                            <li class="breadcrumb-item active">Admins</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="uil uil-moneybag"></i> Admins
                        <span class="text-primary b-l pl-2 ml-2">{{ count($admins) }}</span>
                        <span class="font-12 text-muted ml-1">Total Admins</span>
                    </h4>
                </div>
                @include('superadmin.sections.flash-message')
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-2">
                <div class="float-right">
                    <a class="btn btn-sm btn-outline-warning" href="javascript:void(0)" id="filter">Filters</a>
                    <a class="btn btn-sm btn-outline-success" href="{{ route('superadmin.admins.create') }}">Create</a>
                </div>
            </div>
            @include('superadmin.admins.filter')
        </div>

        <table id="dataTable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>Trial</td>
                        <td>Active</td>
                        <td>
                            Verified <span class="float-right"> Yes</span><br>
                            Register Date <span class="float-right">{{ ($admin->created_at) }}</span><br>
                            Total Users <span class="float-right">10</span><br>
                        </td>
                        <td>
                            <a href="{{ route('superadmin.admins.edit', $admin->id) }}"
                                class="btn btn-sm btn-outline-primary" data-toggle="tooltip" data-placement="top"
                                data-original-title="Edit"><i class="uil-pen"></i></a>

                            <a href="javascript:void(0)" onclick="confirmDelete({{ $admin->id }})"
                                class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top"
                                data-original-title="Delete"><i class="uil-trash"></i></a>

                            <form id="delete-form{{ $admin->id }}"
                                action="{{ route('superadmin.admins.destroy', $admin->id) }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    @include('superadmin.sections.datatables.scripts')
@endpush
