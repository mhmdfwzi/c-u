@extends('backend.layouts.master')

@section('title')
    Edit Role
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Role</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Role</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.roles.update', $role->id) }}" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6">
                            <label for="name">أسم ال role </label>
                            <input type="text" class="form-control" name="name" value="{{ $role->name }}"
                                id="name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission :</strong>
                                    {{-- <select name="permission[]" class="form-control" multiple> --}}
                                    <div class="row">
                                        @foreach ($permission as $value)
                                            <div class="col-md-3">
                                                <input type="checkbox" name="permission[]" value="{{ $value->name }}"
                                                    {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}
                                                    class="name" />
                                                <label>

                                                    {{ $value->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- </select> --}}
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">تأكيد</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
