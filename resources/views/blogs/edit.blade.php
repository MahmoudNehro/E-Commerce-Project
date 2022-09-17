@extends('layouts.master')
@section('css')

@section('title')
    empty
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
        <h3 class="card-title">Blog Update</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('blogs.update', ['blog' => $blog->id]) }}">
            @csrf
            @method('put')

            <div class="row">
                <div class="mb-10">
                    <label for="title" class="required form-label">Title</label>
                    <input name="title" value="{{ $blog->title }}" type="text"
                        class="form-control form-control-solid" id="title" aria-describedby="titleHelp"
                        placeholder="Enter blog title">

                </div>

            </div>
            <div class="row">
                <div class="mb-10">
                    <textarea name="description" data-kt-autosize="true" class="form-control form-control-solid" id="description"
                        aria-describedby="titleHelp" placeholder="Enter blog description">{{ $blog->description }}</textarea>

                </div>

            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
