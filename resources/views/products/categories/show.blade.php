@extends('layouts.master')
@section('css')

@section('title')
    Categories show
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
        <h3 class="card-title">{{ $category->name }}</h3>
        <div class="card-toolbar">
            <span class="text-light bg-primary p-4 rounded">
                {{ $category->description }}
            </span>
        </div>
    </div>
    <div class="card-body">
        <div>
            @if ($category?->parent)
                <h3> {{ $category?->parent?->name }}</h3>
            @endif
        </div>
        @foreach ($category?->children as $child)
            {{ $child->name }}
        @endforeach

    </div>
    <div class="card-footer">
        <h5 class="d-inline"> Created At:</h5> {{ $category->created_at->format('d-m-Y') }}
        <h5 class="d-inline"> Updated At:</h5> {{ $category->updated_at->format('d-m-Y') }}

    </div>
</div>



<!-- row closed -->
@endsection
@section('js')
@endsection
