@extends('layouts.header')
@section('title')
    Print Invoice Salse A6
@endsection
<style>
    body {
        direction: rtl;
        border: 1px dotted #EEE;

    }

    th,
    td {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center !important;
    }

    .get_total {
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: brown;
        font-weight: bold;
        font-size: 20px;
    }

    .invoice-col {
        margin-left: 10px !important;
        width: 200px !important;
        /* width: fit-content !important; */
        border: dashed 1px #000000;
    }

    @media print {
        @page {
            size: 105mm 8.5in !important;
        }

        td {
            font-size: 9px;

        }

        table {
            margin: 0;
        }

        .table-bordered {
            width: 90% !important;
            text-align: center;
            margin-right: 45px;
            border-collapse: none;

        }

        .invoice-col {
            /* margin-left: 150px !important; */
            /* width: fit-content !important; */
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">
                            <i class="fa fa-globe text-center"></i>
                            للحلول التقنية المتكاملة
                            [ IP-Magix ]
                            شركة
                        </p>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <!-- /.col -->
                @if (!empty($salse->serial))


                    <div class="col-sm-12 invoice-col text-center">
                        <b>رقم الفاتــــــورة / #{{ $salse->serial }}</b>
                        <br>
                        <b>التـــاريخ/ 2/10/2014</b>
                        <br>
                        4F3S8J
                        <b>/ رقم الطلب</b>
                        <br>
                        <b>تاريخ السداد /</b> 2/22/2014<br>
                        <b>رقم حساب العميل /</b> 968-34567
                    </div>
                    <!-- /.col -->
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="up_head">
                <span>اسم البائع : </span>
                <span>زمن الفاتــــــورة : </span>
                <span>رقم الوردية : </span>
            </div>
            <br>
            <div class="row">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>المنتجات</th>
                            <th>الكمية</th>
                            <th>سعر الوحدة</th>
                            <th>اجمالي الصنف</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($salse_data as $item)
                            <tr>
                                {{-- {{$salse_data}} --}}
                                <td>{{ $item->product_id }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->subtotal }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="get_total">إجمالي الفاتورة
                                (5,0000.00)</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <span class="text-center">
                    شكرا لزيارتكم الجميلة
                </span>
                <span class="text-center">0114700220</span>


                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    @else
        لا توجد داتا
        @endif
        <!-- /.invoice -->
    </div><!-- /.col -->
</div><!-- /.container -->

<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/Adminlte.min.js') }}"></script>

<script>
    $(document).ready(function() {
        // window.print();
        // window.onprint(function(){
        //     alert("printed");
        // });

    });
</script>
