@extends('layouts.master')
@section('css')

@section('title')
    Coupon show
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
        <h3 class="card-title">#ID {{ $coupon->code }}</h3>
        <div class="card-toolbar">
            <span class="text-light bg-primary p-4 rounded">
              Amount:  {{ $coupon->amount }}
            </span>
        </div>
    </div>
    <div class="card-body">
     Coupon   {{ $coupon->code }}

    </div>
    <div class="card-footer">
        <h5 class="d-inline"> Start At:</h5> {{ $coupon->start_at }}
        <h5 class="d-inline"> End At:</h5> {{ $coupon->end_at }}

    </div>
</div>



<!-- row closed -->
@endsection
@section('js')
@endsection
