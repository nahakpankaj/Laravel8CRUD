@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="fa-pull-left">
                <h2>Show Product</h2>
            </div>
            <div class="fa-pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table>
                    </th>
                    <strong>Product Name :: </strong>
                    {{ $product->name }}
                    <th>
                        <tbody>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Product Details :: </strong>
                                        {{ $product->details }}
                                    </div>
                                </div>
                            </div>
                        </tbody>
                </table>
            </div>
        </div>
    @endsection
