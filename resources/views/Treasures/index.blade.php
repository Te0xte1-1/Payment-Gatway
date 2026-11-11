@extends('layouts.app')

@section('title')
    Category
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">الضبط العام</li>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('Treasures') }}">بيانات الخزن</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            {{ __('بيانات جميع الخزن') }}
                        </h4>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>اسم الخزينة</th>
                                <th>هل الخزينة رئيسية</th>
                                <th>أخر إيصال صرف</th>
                                <th>أخر إيصال تحصيل</th>
                                <th>حالة تفعيل الخزينة</th>
                                <th>اكشن</th>
                            </thead>
                            <tbody>
                                @foreach ($treasures as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->treasures_name }}</td>
                                        <td>
                                            @if ($item->is_master == 1)
                                                خزنة رئيسية
                                            @else
                                                خزنة فرعية
                                            @endif
                                        </td>
                                        <td>{{ $item->last_isal_exchange }}</td>
                                        <td>{{ $item->last_isal_collect }}</td>
                                        <td>
                                            @if ($item->active == 1)
                                                الخزنة مفعله
                                            @else
                                                الخزنة غير مفعله
                                            @endif
                                        </td>
                                        <td><a href="{{ route('Treasures.edit', $item->id) }}"><i
                                                    class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                {{-- <tr>
                                    <td style="background:lightyellow">رئيسية المجمدات</td>
                                    <td style="background: lightcyan"> رصيد الإجمالي (750) </td>
                                    <td style="background:lightyellow">رئيسية المجمدات</td>
                                    <td style="background: lightcyan"> رصيد الإجمالي (750) </td>
                                    <td style="background: lightcyan"> رصيد الإجمالي (750) </td>
                                    <td style="background:lightyellow">رئيسية المجمدات</td>
                                    

                                </tr>
                                <tr>
                                    <td style="background:lightyellow">الكاشير</td>
                                    <td style="background:lightcoral">اجمالي رصيد الكاشير(0) </td>
                                    <td style="background:lightyellow">الكاشير</td>
                                    <td style="background:lightcoral">اجمالي رصيد الكاشير(0) </td>
                                    <td style="background:lightyellow">الكاشير</td>
                                    <td style="background:lightcoral">اجمالي رصيد الكاشير(0) </td>
                                    <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                </tr> --}}
                            </tbody>
                        </table>


                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
