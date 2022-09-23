@extends('layouts.master')
@section('css')

@section('title')
    Products histories index
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->


<div class="card mb-5 mb-xl-8">

    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Products histories</span>
        </h3>

    </div>
    <!--end::Header-->
    <!--begin::Body-->

    <div class="card-body py-3">
        <a class="btn btn-primary" href="{{ route('product-histories.create', ['id'=>$product->id]) }}">Create</a>

        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>Id</th>
                        <th>Product Title</th>
                        <th>currenct</th>
                        <th>latest quantity</th>
                        <th>steps</th>
                        <th>type</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($histories as $history)
                        <tr>
                            <td>@php echo $i++; @endphp</td>
                            <td>{{ $history->product?->name }}</td>
                            <td>{{ $history->current }}</td>
                            <td>{{ $history->last_quantity }}</td>
                            <td>{{ $history->steps }} </td>
                            <td>{{ $history->operation_type }} </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>

<!-- row closed -->
@endsection
@section('js')
<script>
    $("#kt_datatable_example_1").DataTable();
    $("#kt_datatable_example_5").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>
@endsection
