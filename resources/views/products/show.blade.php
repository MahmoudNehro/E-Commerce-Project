@extends('layouts.master')
@section('css')

@section('title')
    Product show
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">{{ $product->name }}</h3>
        <div class="card-toolbar">
            <span class="text-light bg-primary p-4 rounded">
                <div> Price: {{ $product->price }}</div>
                <div> Discounts: {{ $product->discounts ?? 'No Discounts' }}</div>
                <div> Quantity: {{ $product->quantity }}</div>
            </span>
        </div>
    </div>
    <div class="card-body">
        <h3>Description: </h3>
        {{ $product->description }}
    </div>
    <div class="card-footer">
        <h5 class="d-inline"> Created At:</h5> {{ $product->created_at->format('d-m-Y') }}
        <h5 class="d-inline"> Updated At:</h5> {{ $product->updated_at->format('d-m-Y') }}

    </div>
</div>



<!-- row closed -->
@endsection
@section('js')
@endsection
