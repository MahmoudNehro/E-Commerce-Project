@extends('layouts.master')
@section('css')

@section('title')
    Products inventory create
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@include('_toolpar')
<!-- breadcrumb -->
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- row -->
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Products inventories</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('product-histories.store') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <div class="row">
                <div class="mb-10 col-md-6">
                    <label for="steps" class="required form-label">steps</label>
                    <input name="steps" type="text" class="form-control form-control-solid" id="steps"
                        aria-describedby="titleHelp" placeholder="Enter steps" value="{{ old('steps') }}">

                </div>
                <div class="mb-10 col-md-6">
                    <label for="operation_type" class="required form-label">Categories</label>

                    <select id="operation_type" name="operation_type" class="form-select form-select-solid"
                        aria-label="Select example" data-control="select2">
                        @foreach ($types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach

                    </select>
                </div>




            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
