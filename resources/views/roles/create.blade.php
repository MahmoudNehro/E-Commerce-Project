@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->

<!-- breadcrumb -->
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
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
        <h3 class="card-title">Role</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('roles.store') }}">
            @csrf

            <div class="row">
                <div class="mb-10 col-6">
                    <label for="name" class="required form-label">Name</label>
                    <input name="name" type="text" class="form-control form-control-solid" id="name"
                        aria-describedby="nameHelp" placeholder="Enter role name">

                </div>

            </div>

            <div class="mb-10">
                <select name="permission_id[]" class="form-select form-select-solid" multiple
                    aria-label="Select example">
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach

                </select>
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
