@extends('admin.layouts.master')

@section('title')
    {{ env('APP_NAME') }} - Products
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"
                                    class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page"><a href="#">Products</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6 col-md-9 col-lg-9">
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <a a href="{{ route('admin.product.create') }}" type="submit" class="btn btn-info"
                                style="float: right;width: 100%;">
                                <i data-feather="plus" class="feather-icon"></i>Create New
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="datatable_product" class="table table-striped table-bordered display no-wrap"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Product Image</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->index + 1 }} </td>
                                        <td>{{ $product->name }} </td>
                                        <td><img src="products/{{ $product->image }}" class="rounded-circle" width="50"
                                                height="50" /> </td>
                                        <td>
                                            <a href="products/{{ $products->id }}/edit" class="btn btn-dark btn-sm">Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="products/{{ $products->id }}/delete" class="btn btn-dark btn-sm">Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            {{-- <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
