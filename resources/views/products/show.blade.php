@extends('layouts.master')
@section('css')

@section('title')
    Blogs show
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
        <h3 class="card-title">{{ $blog->title }}</h3>
        <div class="card-toolbar">
            <span class="text-light bg-primary p-4 rounded">
                {{ $blog->user?->name }}
            </span>
        </div>
    </div>
    <div class="card-body">
        {{ $blog->description }}
    </div>
    <div class="card-footer">
        <h5 class="d-inline"> Created At:</h5> {{ $blog->created_at->format('d-m-Y') }}
        <h5 class="d-inline"> Updated At:</h5> {{ $blog->updated_at->format('d-m-Y') }}

    </div>
</div>



<!-- row closed -->
@endsection
@section('js')
@endsection
