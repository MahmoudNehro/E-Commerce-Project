@extends('layouts.master')
@section('css')
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

@section('title')
    Coupons
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
        <h3 class="card-title">Coupons</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('coupons.store') }}">
            @csrf
            <div class="mb-10 form-check form-switch form-check-custom form-check-solid">

                <input type="hidden" name="active" value="0">

                <input class="form-check-input" value="1" name="active" type="checkbox" id="flexSwitchDefault" />

                <label class="form-check-label" for="flexSwitchDefault">

                    Active

                </label>
            </div>

            <div class="row">
                <div class="mb-10 col-md-12">
                    <label for="amount" class="required form-label">Amount</label>
                    <input name="amount" type="text" class="form-control form-control-solid" id="amount"
                        aria-describedby="titleHelp" placeholder="Enter coupon amount" value="{{ old('amount') }}">

                </div>



            </div>
            <div class="row">
                <div class="mb-10 col-md-6">
                    <label for="start_at" class="required form-label">Start At</label>
                    <input name="start_at" type="date" class="form-control form-control-solid" id="start_at"
                        aria-describedby="titleHelp" placeholder="Enter coupon start date"
                        value="{{ old('start_at') }}">

                </div>
                <div class="mb-10 col-md-6">
                    <label for="end_at" class="required form-label">End At</label>
                    <input name="end_at" type="date" class="form-control form-control-solid" id="end_at"
                        aria-describedby="titleHelp" placeholder="Enter coupon end date" value="{{ old('end_at') }}">

                </div>



            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')
<script src="assets/plugins/global/plugins.bundle.js"></script>

@endsection
