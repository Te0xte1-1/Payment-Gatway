@extends('layouts.app')

@section('title')
    Stock
@endsection
@section('content')
    <style>
        .show_products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .info-box {
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            border-radius: 1px !important;
            background-color: #fff;
            display: -ms-flexbox;
            display: flex;
            border: 1px solid #ddd;
            margin-bottom: 1rem;
            min-height: 80px;
            padding: 0.5rem;
            position: relative;
            width: 100%;
        }
    </style>
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط المخازن</li>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('Stock') }}">المخازن</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            عرض الأصناف في المخزن رقم
                            (
                            <span id="store_id">
                                {{ $stock_id }}
                            </span>
                            )
                            <a class="text-left" title="رجوع لصفحة المخازن" href="{{ route('Stock') }}" class="text-left">
                                رجوع للمخازن
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </h4>
                        <br>
                        <select name="cat_id" class="form-control" id="cat_id">
                            <option value="">اختر القسم</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <a title="رجوع لصفحة المخازن" href="{{ route('Stock') }}" class="text-left">
                                        رجوع للمخازن
                                        <i class="fa fa-arrow-left"></i>
                                    </a>


                                </div>
                            </div>

                        </div> --}}
                        {{-- <hr> --}}

                        <div class="show_products" id="show_products">
                            @if (!empty($data))
                                @foreach ($data as $item)
                                    <div class="col-md-12 col-sm-6 ">
                                        <div class="info-box">
                                           <div class="info-box-content">
                                                <span class="info-box-text">Product Name : <b id="ccat_id">
                                                        {{ $item->pro_id }}
                                                    </b></span>
                                                <span class="info-box-number">Price : <i class="fa fa-dollar-sign"></i>
                                                    <b id="uunit_cost_price">{{ $item->unit_cost_price }}</b></span>
                                                <span class="info-box-text">Product On Stock : <b id="qqty">
                                                        {{ $item->qty }}
                                                    </b></span>
                                            </div>
                                          
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                نأسف لا توجد أصناف في هذا المخزن
                            @endif
                        </div>
                    </div>
                    <!-- /.card-body -->


                   
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(document).on('change', '#cat_id', function() {
                var cat_id = $(this).val();
                var store_id = $('#store_id').html();
                $.ajax({
                    type: "POST",
                    url: "{{ route('Stock_cat_to_pro') }}",
                    data: {
                        cat_id: cat_id,
                        store_id: store_id
                    },
                    dataType: "html",
                    success: function(data) {
                        $('#show_products').html(data);
                        $('#show_products').val(data);

                        // $('.show_products').html(data);


                    }
                });

            });
        });
    </script>
@endsection
