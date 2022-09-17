@extends('layouts.master')
@section('css')

@section('title')
    Users Index
@stop
@endsection
@section('page-header')

@endsection
@section('content')


<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Users</span>
        </h3>

    </div>
    <div class="card-body py-3">
        <div class="table-responsive">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bolder fs-6 text-gray-800 px-7">
                        <th>Id</th>
                        <th>User Name</th>
                        <th>User Email</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>@php echo $i++; @endphp</td>
                            <td>{{ $user?->name }}</td>

                            <td>
                                {{ $user?->email }}
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

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
