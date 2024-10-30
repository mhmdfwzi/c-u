@extends('backend.layouts.master')

@section('title')
    الصفحات
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الصفحات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">الصفحات</li>
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
                    <table id="custom_table" class="display">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>عنوان الصفحة</th>
                                <th>slug</th>
                                <th>نشط</th>
                                <th>الصورة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>

                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>
                                        @if ($page->active == '1')
                                            <span class="text-success">نشط</span>
                                        @else
                                            <span class="text-danger">غير نشط</span>
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ $page->image_url }}" height="50" width="50" alt="">
                                    </td>

                                    <td>

                                        @php
                                            $seo = App\Models\SeoData::where('entity_id', $page->id)
                                                ->where('entity_type', 'page')
                                                ->first();
                                        @endphp
                                        @if ($seo)
                                            <a href="{{ Route('admin.seo.edit', [$page->id, 'page']) }}"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        @else
                                            <a href="{{ Route('admin.seo.create', [$page->id, 'page']) }}"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        @endif
                                        <a href="{{ Route('admin.pages.edit', $page->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <form action="{{ Route('admin.pages.destroy', $page->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
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
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });


        });
    </script>
@endpush
