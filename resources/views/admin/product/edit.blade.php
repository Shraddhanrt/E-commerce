@extends('admin.layouts.master')

@section('title')
    {{ env('APP_NAME') }} - Products Create
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Products</a></li>
                            <li class="breadcrumb-item"><a href="#">Create</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create New Product</h4><br>
                        <form action="{{ route('admin.product.update') }}" method="POST" action="/products/store "
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-group col-12 col-md-6 col-lg-6">
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <label>Product Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" required name="name"
                                                value="{{ $product->name }}" placeholder="Enter Product Name">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group col-12 col-md-6 col-lg-6">
                                            <label>Product Image<span class="required">*</span></label>
                                            <input type="file" class="form-control" name="image">
                                            <img src="{{ url($product->image) }}" class="rounded-circle" width="50"
                                                height="50" />
                                            @if ($errors->has('image'))
                                                <div class="text-danger">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-12 col-md-6 col-lg-6">
                                            <label>Cost<span class="required">*</span></label>
                                            <input type="number" class="form-control" name="cost" id="cost"
                                                step="0.01" min="0" value="{{ $product->cost }}" required
                                                placeholder="Enter Price">
                                            @if ($errors->has('cost'))
                                                <div class="text-danger">
                                                    <strong>{{ $errors->first('cost') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-12 col-md-6 col-lg-6">
                                            <label>Quantity<span class="required">*</span></label>
                                            <input type="number" class="form-control" name="quantity" id="quantity"
                                                value="{{ $product->quantity }}"required placeholder="Enter Quantity">
                                            @if ($errors->has('quantity'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('quantity') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group col-12 col-md-12 col-lg-12">
                                            <label>Status</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status_active" value="active"
                                                        {{ $product->active ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status_active">Active</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="status_inactive" value="inactive"
                                                        {{ $product->inactive ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status_inactive">Inactive</label>
                                                </div>
                                            </div>
                                            @if ($errors->has('status'))
                                                <div class="text-danger">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-12 col-md-6 col-lg-12">
                                            <label for="description">Product Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="5"
                                                placeholder="Enter Product's Description">{{ old('description', $product->description) }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info custom-button">Submit</button>
                                    <button type="reset" class="btn btn-dark custom-button">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
