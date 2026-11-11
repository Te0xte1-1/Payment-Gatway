@extends('layouts.app')

@section('title')
    Admins
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط الصلاحيات</li>
            </li>
            <li class="breadcrumb-item active"><a href="#">شفتات الخزن</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6 class="text-center">
                            {{ __('بيانات شفتات الخزن للمستخدمين') }}
                            <i class="fa fa-user"></i>
                        </h6>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="card card-success card-outline">
                                    <div class="card-header">
                                        <h4 class="text-center">
                                            {{ __('استلام خزنة لشفت جديد') }}
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- form start -->
                                        <form action="{{ route('Admins_Shifts.store') }}" method="POST">
                                            <div class="row">
                                                @csrf
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        @if (@isset($shift_data) && !@empty($shift_data))
                                                            @if ($shift_data->admin_id == 1 && $shift_data->is_finished == 0)
                                                                <label for="">لقد تم افتتاح الشفت فعلا </label>
                                                            @else
                                                                <label for="">بيانات الخزن المضافة
                                                                    لصلاحياتي</label>
                                                                <select name="treasures_id" class="form-control"
                                                                    id="treasures_id">
                                                                    <option value="">من فضلك قم بإختيار الخزنة
                                                                        لبدء
                                                                        الشفت
                                                                    </option>
                                                                    @foreach ($treasures as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->treasures_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <br>
                                                                <br>
                                                                <input type="submit"
                                                                    class="form-control btn-success btn-sm"
                                                                    value="بدأ الشفت">
                                                            @endif
                                                        @else
                                                            لا توجد بيانات لعرضها
                                                        @endif

                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card card-info card-outline">
                                    <div class="card-header">
                                        <h4 class="text-center">
                                            {{ __(' بيانات الشفت المفتوح حاليا') }}
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- form start -->
                                        <form action="{{ route('Admins_Shifts.close_shift') }}" method="POST">
                                            <div class="row">
                                                @csrf
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="data-shift-opened">
                                                            @if (@isset($shift_data) && !@empty($shift_data))
                                                                @if ($shift_data->admin_id == 1 and $shift_data->is_finished == 1)
                                                                    <label for="">لا يوجد شفت فاتح يمكنك بدأ شفت
                                                                        جديد</label>
                                                                @else
                                                                    <h6 for="">اسم المستخدم
                                                                        <span style="font-size: 14px;color:blue"> (
                                                                            {{ $shift_data->admin_id }} )</span>
                                                                    </h6>
                                                                    <h6>الخزنةالمستخدمة في الشفت
                                                                        <span style="font-size: 14px;color:blue">(
                                                                            {{ $shift_data->treasures_id }} )</span>
                                                                    </h6>
                                                                    <h6>تاريخ بدايةالشفت
                                                                        <span style="font-size: 14px;color:blue">(
                                                                            {{ $shift_data->started_date }} )</span>
                                                                    </h6>
                                                                    <input type="submit"
                                                                        class="form-control btn-info btn-sm"
                                                                        value="إقفال الشفت الحالي">
                                                                @endif
                                                            @else
                                                                لا توجد داتا
                                                            @endif



                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-stripped">
                                    <thead>
                                        <th>كود الشفت</th>
                                        <th>اسم المستخدم</th>
                                        <th>اسم الخزنة</th>
                                        <th>وقت فتح الشفت</th>
                                        <th>حاله الشفت</th>
                                        <th>حاله مراجعه الشفت</th>
                                        <th>اكشن</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins_shift as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->admin_id }}</td>
                                                <td>{{ $item->treasures_id }}</td>
                                                <td>{{ $item->started_date }}</td>
                                                <td>{{ $item->is_finished }}</td>
                                                <td>{{ $item->is_delevered_and_reviewed }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success btn-sm">طباعة الكشف</a>
                                                    <a href="#" class="btn btn-danger btn-sm">كشف مختصر</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
@endsection
