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
        <h3 class="card-title">Category Update</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
            @csrf
            @method('put')
            <div class="mb-10 form-check form-switch form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1" name="active" id="flexSwitchDefault" />
                <input class="form-check-input" type="hidden" value="0" name="active" id="flexSwitchDefault" />
                <label class="form-check-label" for="flexSwitchDefault">
                    Active
                </label>
            </div>
            <div class="row">
                <div class="mb-10 col-md-6">
                    <label for="name_ar" class="required form-label">Name</label>
                    <input name="name[ar]" type="text" class="form-control form-control-solid" id="name_ar"
                        aria-describedby="titleHelp" placeholder="Enter category title in arabic"
                        value="{{ $category->getTranslations('name', ['ar'])['ar'] }}">

                </div>
                <div class="mb-10 col-md-6">
                    <label for="name_en" class="required form-label">Name</label>
                    <input name="name[en]" type="text" class="form-control form-control-solid" id="name_en"
                        aria-describedby="titleHelp" placeholder="Enter category title in english"
                        value="{{ $category->getTranslations('name', ['en'])['en'] }}">

                </div>

            </div>
            <div class="row">
                <div class="mb-10">
                    <textarea name="description[ar]" class="form-control form-control-solid" id="description" aria-describedby="titleHelp"
                        placeholder="Enter category description in arabic" data-kt-autosize="true">{{ $category->description }}</textarea>

                </div>
                <div class="mb-10">
                    <textarea name="description[en]" class="form-control form-control-solid" id="description" aria-describedby="titleHelp"
                        placeholder="Enter category description in english" data-kt-autosize="true">{{ $category->description }}</textarea>

                </div>

            </div>
            <div class="row">
                <div class="mb-10">

                    <select name="parent_id" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
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
