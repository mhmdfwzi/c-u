@extends('backend.layouts.master')

@section('title')
    فريق العمل
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> فريق العمل </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">فريق العمل</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="custom_table" width="100%" cellspacing="0">
                            {{-- <table id="custom_table" class="display"> --}}

                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> الصورة </th>
                                    <th>أسم الموظف</th>
                                    <th>الوظيفة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teamwork as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>

                                        <td>
                                            <img src="{{ $member->image_url }}" height="50" width="50"
                                                alt="">
                                        </td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>

                                        <td>
                                            <a href="{{ route('admin.teamwork.edit', $member->id) }}"
                                                class="btn btn-warning">تعديل</a>
                                            <form action="{{ route('admin.teamwork.destroy', $member->id) }}" method="post"
                                                style="display:inline">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger">
                                                    حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            var datatable = $('#custom_table').DataTable({
                stateSave: true,
                sortable: true,
                oLanguage: {
                    sSearch: 'البحث',
                    sInfo: "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                    sZeroRecords: 'لا يوجد سجل متتطابق',
                    sEmptyTable: 'لا يوجد بيانات في الجدول',
                    oPaginate: {
                        sFirst: "First",
                        sLast: "الأخير",
                        sNext: "التالى",
                        sPrevious: "السابق"
                    },
                },
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [1, 2, 3]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });
        });
    </script>
@endpush