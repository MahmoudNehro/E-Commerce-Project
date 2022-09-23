@extends('layouts.master')
@section('css')

@section('title')
    Products
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
        <h3 class="card-title">Products</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-10 form-check form-switch form-check-custom form-check-solid">
                <input type="hidden" name="active" value="0">
                <input class="form-check-input" value="1" name="active" type="checkbox" id="flexSwitchDefault" />
                <label class="form-check-label" for="flexSwitchDefault">
                    Active
                </label>
            </div>
            <div class="row">
                <div class="mb-10 col-md-6">
                    <label for="name_ar" class="required form-label">Title</label>
                    <input name="name[ar]" type="text" class="form-control form-control-solid" id="name_ar"
                        aria-describedby="titleHelp" placeholder="Enter product title in arabic"
                        value="{{ old('name[ar]') }}">

                </div>
                <div class="mb-10 col-md-6">
                    <label for="name_en" class="required form-label">Title</label>
                    <input name="name[en]" type="text" class="form-control form-control-solid" id="name_en"
                        aria-describedby="titleHelp" placeholder="Enter product title in english"
                        value="{{ old('name[en]') }}">

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
            <div class="row">
                <div class="mb-10 col-md-4">
                    <label for="price" class="required form-label">Price</label>
                    <input name="price" type="text" class="form-control form-control-solid" id="price"
                        aria-describedby="price" placeholder="Enter price" value="{{ old('price') }}">

                </div>
                <div class="mb-10 col-md-4">
                    <label for="category_id" class="required form-label">Categories</label>

                    <select id="category_id" name="category_id" class="form-select form-select-solid"
                        aria-label="Select example" data-control="select2">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-10 col-md-4">
                    <label for="quantity" class="required form-label">Quantity</label>
                    <input name="quantity" type="text" class="form-control form-control-solid" id="quantity"
                        aria-describedby="quantity" placeholder="Enter quantity" value="{{ old('quantity') }}">

                </div>


            </div>


            <div class="row mb-10">
                <div class="col-md-12">
                    <div id="kt_docs_repeater_basic">
                        <div class="form-group">
                            <div data-repeater-list="specifications">
                                <div data-repeater-item>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label class="form-label">Key: </label>
                                            <input type="text" name="key" class="form-control mb-2 mb-md-0"
                                                placeholder="Enter Key" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Value:</label>
                                            <input type="text" name="value" class="form-control mb-2 mb-md-0"
                                                placeholder="Enter Value" />
                                        </div>
                                        <div class="col-md-4">
                                            <a href="javascript:;" data-repeater-delete
                                                class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                <i class="la la-trash-o"></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                <i class="la la-plus"></i>Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>

<script>
    $('#kt_docs_repeater_basic').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
</script>
@endsection
