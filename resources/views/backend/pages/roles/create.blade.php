@extends('backend.layouts.master')

@section('title')
    Create Role
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Create Role</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Dashboard</a></li>
                    <li class="breadcrumb-item active">Create Role</li>
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
                    <form method="POST" action="{{ route('admin.roles.store') }}" autocomplete="off">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="name">أسم ال role </label>
                            <input type="text" class="form-control" name="name" id="name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>الأذونات :</strong>
                                    {{-- <select name="permission[]" class="form-control" multiple>
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                        @endforeach
                    </select> --}}
                                    <div class="row">
                                        @foreach ($permissions as $value)
                                            <div class="col-md-3">
                                                <input type="checkbox" name="permission[]" value="{{ $value->name }}"
                                                    class="name" />
                                                <label>
                                                    {{ $value->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                        @error('permission')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
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
