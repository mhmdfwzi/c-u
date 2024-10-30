@extends('backend.layouts.master')

@section('title')
    image
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> image </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">image</li>
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
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> الصورة </th>
                                    <th>type </th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>

                                        <td>
                                            <img src="{{ $image->image_url }}" height="50" width="50" alt="">
                                        </td>
                                        <td>
                                            @if ($image->type == 'main_image')
                                                <span class="text-info text-bold">Main Image</span>
                                            @elseif ($image->type == 'about_image')
                                                <span class="text-info text-bold">About Image</span>
                                            @else
                                                <span class="text-info text-bold">Service / Product Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.images.edit', $image->id) }}"
                                                class="btn btn-warning">تعديل</a>
                                            <form action="{{ route('admin.images.destroy', $image->id) }}" method="post"
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
        var datatable = $('#custom_table').DataTable({
            stateSave: true,
            responsive: true,
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
            sortable: true,
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
                        columns: [0, 1, 2]
                    },
                    title: "المستخدمين"
                },
                'colvis'
            ],

        });
    </script>
@endpush
