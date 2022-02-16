@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="fa-pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="fa-pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>

        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Problem with your Input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        placeholder="Enter Product Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Details</strong>
                    <textarea class="form-control" style="height: 200px;" name="details"
                        placeholder="Enter your Details">{{ $product->details }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection