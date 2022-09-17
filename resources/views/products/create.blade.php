@extends('layouts.master')
@section('css')
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

@section('title')
    Categories
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
        <h3 class="card-title">Categories</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="row">
                <div class="mb-10">
                    <label for="title_ar" class="required form-label">Title</label>
                    <input name="title[ar]" type="text" class="form-control form-control-solid" id="title_ar"
                        aria-describedby="titleHelp" placeholder="Enter category title in arabic"
                        value="{{ old('title[ar]') }}">

                </div>
                <div class="mb-10">
                    <label for="title_en" class="required form-label">Title</label>
                    <input name="title[en]" type="text" class="form-control form-control-solid" id="title_en"
                        aria-describedby="titleHelp" placeholder="Enter category title in english"
                        value="{{ old('title[en]') }}">

                </div>


            </div>
            <div class="row">
                <div class="mb-10">
                    <textarea name="description[ar]" class="form-control form-control-solid" id="description" aria-describedby="titleHelp"
                        placeholder="Enter category description in arabic" data-kt-autosize="true">{{ old('description[ar]') }}</textarea>

                </div>
                <div class="mb-10">
                    <textarea name="description[en]" class="form-control form-control-solid" id="description" aria-describedby="titleHelp"
                        placeholder="Enter category description in english" data-kt-autosize="true">{{ old('description[en]') }}</textarea>

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
