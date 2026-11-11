@extends('layouts.app')
@section('title')
    Salse Page
@endsection
@section('content')
    <style>
        .container {
            padding: 10px;
        }

        .row {
            padding-left: 10px;
            padding-right: 10px;
        }

        th,
        td {
            text-align: center;
            font-size: 14px;
        }

        h2,
        h6 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center !important;
            font-size: 14px;
            color: #000000ad;
        }

        label {
            font-size: 14px;
            float: right !important;
            margin-right: 15px;
        }

        div#add_rows_data {
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h6>
                    صفحة فواتير المبيعات
                    <i class="fas fa-edit"></i>

                    <a href="#" title="فاتورة جديده" class="btn btn-danger btn-sm"
                        style="float: right;margin-left:5px; font-size: 14px;" data-toggle="modal"
                        data-target="#modal-xl">فاتورة جديده</a>

                    <a href="#" title="فاتورة مرتجع مبيعات" id="Salse_Back" class="btn btn-info btn-sm"
                        style="float: right;font-size: 14px;">فاتورة مبدئية</a>


            </div>
            <div class="card-body" id="table_salse_data">

            </div>
            <!-- /.card -->
        </div>


    


        <!-- Show Invoice Modal -->
        <div class="modal fade" id="modal-xl-edit">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-body" id="edit_bill_body">

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>

                    </div>
                </div>

            </div>

        </div> <!-- Show Invoice Modal -->


        <!-- New Invoice Modal -->
        <div class="modal fade" id="add_rows_data">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-info card-outline">
                                    <!-- /.card-header -->
                                    <div class="card-header ">
                                        <b>
                                            <h4 class="text-center">تحديث الفاتــــــورة</h4>
                                        </b>
                                    </div>
                                    <div class="card-body" id="show_rows_data">


                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        </div> <!-- card-footer -->
                    </div>
                </div>

            </div>

        </div> <!-- Edit Invoice Modal -->


        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary card-outline">
                                    <div class="card-header ">
                                        <b>
                                            <h5 class="text-center">فاتورة مبيعات</h5>
                                        </b>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <form id="add_item_to_invoice" action="{{ route('Salse.add_item_to_invoice') }}"
                                                method="post">
                                                <input type="hidden" name="invoice_number" id="invoice_number">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <h6>
                                                                <i class="far fa-calendar-alt"></i>
                                                                التـــاريخ
                                                            </h6>

                                                            <input type="text" name="date" value="{{ date('Y:M:D') }}"
                                                                class="form-control form-control-sm" id="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <h6>
                                                                بيانات العميل
                                                                <i class="fa fa-user"></i>
                                                            </h6>
                                                            <select class="form-control " style="width: 100%;"
                                                                data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                                name="customer" id="customer">
                                                                <option value="">(بدون عميل)</option>
                                                                @foreach ($Customers as $Customer)
                                                                    <option value="{{ $Customer->id }}">
                                                                        {{ $Customer->customer_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <?php $i = rand(1, 1000000);
                                                            $t = 10001; ?>
                                                            <h6>رقم الفاتورة <i class="fa fa-barcode"></i></h6>
                                                            <input type="text" value="<?= $t . $i ?>" name="serial"
                                                                style="color:#000;text-align:center"
                                                                class="form-control form-control-sm" id="serial">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <h6>نوع الفاتورة <i class="fa fa-file"></i></h6>
                                                            <select class="form-control " style="width: 100%;"
                                                                data-select2-id="2" tabindex="-1" aria-hidden="true"
                                                                name="bill_type" id="bill_type">
                                                                <option value="3">فاتورة مبيعات</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input type="button"
                                                                class="btn btn-info btn-sm add_new_rows "
                                                                value="إكمال الفاتورة" style="margin-left:450px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>

                </div> <!-- New Invoice Modal -->
            </div>
        </div>


        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/Adminlte.min.js') }}"></script>

        <script>
            $(document).ready(function() {

                $.ajax({
                    url: "{{ route('Salse.load_salse.load_salse_table') }}",
                    method: "POST",
                    success: function(data) {

                        $('#table_salse_data').append(data);
                    }
                });
                // new Salse invoice
                $('#modal-xl').modal('show');
                count = 0;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // $('body').on('click', '#edit_invoice', function(e) {
                //     e.preventDefault();
                //     var invoice_id = $(this).data('invoice_id');
                //     $.ajax({
                //         method: 'post',
                //         url: "{{ route('load_pro_by_cat_id_in_salse') }}",
                //         data: {
                //             // '_token': {{ csrf_token() }},
                //             'invoice_id': invoice_id
                //         },
                //         success: function(data) {
                //             console.log(data);
                //         },
                //     });


                // });

                $('body').on('change', '#cat_id_invoice', function(e) {

                    get_item_by_cat_id('#cat_id_invoice', '#pro_invoice');
                }); // Cat ID To Bring Pro Data

                $('body').on('change', '#pro_invoice', function(e) {
                    get_price_item('#pro_invoice', '#price_invoice', '#price_invoice_hidden');
                }); // Pro ID To Bring Pro Data

                $('body').on('click', '.add_new_row', function(e) {
                    e.preventDefault();

                    var stock_name = $('#stock_invoice').children('option:selected').data('stock');
                    var cat_name = $('#cat_id_invoice').children("option:selected").data("cat");
                    var pro_name = $('#pro_invoice').children('option:selected').data('pro');
                    var unit_name = $('#unit_invoice').children('option:selected').data('unit');
                    var id = $('#id_update').val();
                    var serial = $('#serial_update').val();
                    var cat_id = $('#cat_id_invoice').val();
                    var pro = $('#pro_invoice').val();
                    var unit = $('#unit_invoice').val();
                    var qty = $('#qty_invoice').val();
                    var price = $('#price_invoice').val();
                    var price_hidden = $('#price_invoice_hidden').val();
                    var stock = $('#stock_invoice').val();
                    var subtotal = (qty * price_hidden);
                    var add_item_to_invoice_form = $('#add_item_to_invoice').serialize();
                    var token_search = $('#token_search').val();
                    var $row =
                        `<tr>    
                                <td>1</td>
                                <td>
                                    <label>${stock_name}</label>
                                    <input type="hidden" name="id_update" value="${id}" id="id_update" class="id_update"/>
                                    <input type="hidden" name="serial" value="${serial}" id="serial_update" class="serial_update"/>
                                    <input type="hidden" name="gogal" value="" class="total-price"/>
                                    <input type="hidden" name="stocks[]" value="${ stock }"/>
                                    <input type="hidden" name="cat[]" value="${ cat_id }"/>
                                    <input type="hidden" name="pro[]" value="${pro}"/>
                                    <input type="hidden" name="unit[]" id="product-price"value="${unit}"/>
                                    <input type="hidden" name="qty[]" id="product-price"value="${qty}"/>
                                    <input type="hidden" name="price[]" id="product-price"value="${price}"/>

                                </td>
                                <td>
                                    <label>${cat_name}</label>
                                </td>
                                <td>
                                    <label>${pro_name}</label>
                                </td>
                                <td>
                                    <label>${unit_name}</label>
                                    </td>
                                    <td>
                                        <label>${qty}</label>
                                </td>
                                <td>
                                    <label>${price}</label>
                                </td>
                                <td>
                                    <label name="" id="subtotall_invoice"/>${subtotal}</label>
                                    <input type="hidden" name="sub_total[]" id="subtotall_invoice_input" value="${subtotal}" />
                                
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm remove_row"data-id="${cat_id}">-</button>
                                </td>
                            </tr>`;

                    $('#tboody_invoice').append($row);

                    count += 1;
                    calc_total();


                }); // Added Row To Invoice

                $('body').on('change', '#pay_type', function(e) {
                    // calc_total();
                    var pay_type = $(this).val();
                    var total_after_all = $('#total-invoice').val();
                    if (pay_type == 1) {
                        $('#what_paid').val(total_after_all);
                        $('#what_paid').attr('readonly', true);
                        $('#what_not_yet_paid').val(0);


                    } else if (pay_type == 2) {
                        $('#what_paid').val(0);
                        $('#what_paid').attr('readonly', false);
                        $('#what_not_yet_paid').val(total_after_all);
                    } else {
                        var pay_type = $(this).val(0);
                        $('#what_paid').val(0);
                        $('#what_not_yet_paid').val(0);
                    }
                }); // Pay Type Change Supplier balance  Treasures Balance By ID 

                $('body').on('keyup change', '#what_paid', function(e) {

                    var what_paid = $(this).val();
                    var total_after_all = $('#total-invoice').val();
                    what_paid = parseFloat(what_paid);
                    total_after_all = parseFloat(total_after_all);

                    var operation = what_paid - total_after_all;
                    $('#what_not_yet_paid').val(operation);


                }); // what_paid

                $('body').on('click', '.remove_row', function(e) {
                    e.preventDefault();
                    var id = $(this).data('id');
                    $(this).closest('tr').remove();
                    calc_total();
                    count -= 1;
                    $('#total_item_count').html(count);
                    $('#total_item_count').val(count);
                }); // End Remove Row
                function remov_row() {

                }


                function calc_total() {
                    var serial = $('#serial_update').val();
                    var price = 0;

                    $('#tboody_invoice #subtotall_invoice_input').each(function() {
                        price += parseInt($(this).val());


                    });

                    var get_vat = price * 1 / 100;
                    var qty = parseInt($('#qty').val());
                    var unitprice = $('#qty').data('price');
                    var subtotal = (qty * unitprice);
                    $(this).closest('tr').find('#subtotal').html(subtotal);
                    var subtotal = $('#subtotal').html(subtotal);
                    $('#total-invoice').html(price * 1);
                    $('#total-invoice').val(price * 1);
                    $('#total-price').html(price * 1);
                    $('#total-price').val(price * 1);
                    $('.total-price').val(price * 1);
                    $('.serial_id').val(serial);
                    $('#total_item_count').html(count);
                    $('#total_item_count').val(count);
                    // $('#vat').html(get_vat);
                    $('#what_paid').val(0);
                    $('#what_not_yet_paid').val(0);
                    $('#pay_type').val(0);
                } // End Calc Total

                $('.add_new_rows').click(function() {
                    var serial = $('#serial').val();
                    var date = $('#date').val();
                    var customer = $('#customer').val();
                    var bill_type = $('#bill_type').val();

                    $.ajax({
                        method: 'post',
                        url: "{{ route('load_complete_invoice') }}",
                        dataType: 'html',
                        data: {
                            _token: '{{ csrf_token() }}',
                            serial: serial,
                            date: date,
                            cusotmer: customer,
                            bill_type: bill_type
                        },
                        success: function(data) {
                            // alert(data);
                            $('#modal-xl').html("");
                            $('#modal-xl').modal('hide');
                            $('#show_rows_data').html(data);
                            $('#add_rows_data').modal({
                                show: true,
                                backdrop: 'static',
                            });



                        },
                    });

                });

                /////////////////////////////////////
                $('body').on('mouseenter', '#order-print', function() {
                    var pay_type = $('#pay_type').children('option:selected').val();

                    // alert(pay_type);
                    var treasures_id = $('#treasures_id').val();

                    // if (pay_type == 0 || pay_type == "") {
                    //     alert('يجب عليك اختيار طريقة الدفع');
                    //     pay_type.foucse();
                    // }
                    // if (treasures_id == 0 || treasures_id == "") {
                    //     alert('يجب عليك اختيار الخزنة');
                    // }

                    // alert(row_data);
                    // var row_data = $('#rows_data').serialize();
                    // $(document).Toasts('create', {
                    //     class: 'bg-success',
                    //     title: 'Purshace Invoice',
                    //     subtitle: 'Subtitle',
                    //     body: 'Your Purshace Has Been Successfully Completed .'
                    // })
                });


                // *********************** Edit Bill *******************************
                $('body').on('click', '#edit_bill', function(e) {

                    e.preventDefault();
                    var bill_id = $(this).data('bill-id');
                    $.ajax({
                        method: 'post',
                        // dataType:'html',
                        url: "{{ route('Salse.load_salse.load_edit_bill') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            'bill_id': bill_id
                        },
                        success: function(data) {
                            // For Edit iNVOICE HAS creted
                            $('#modal-xl-edit').modal({
                                show: true,
                                backdrop: 'static',
                            });
                            $('#edit_bill_body').html(data);
                            //   console.log(data);

                        },
                    });
                });

                function get_item_by_cat_id(your_cat = null, your_location_to_save = null) {

                    var cat_id = $(your_cat).val();
                    $.ajax({
                        method: 'post',
                        url: "{{ route('load_pro_by_cat_id_in_salse') }}",
                        dataType: "html",
                        data: {

                            _token: '{{ csrf_token() }}',
                            cat_id: cat_id
                        },
                        success: function(data) {
                            $(your_location_to_save).html(data);
                        },
                    });
                }

                function get_price_item(item_id = null, item_location = null, item_location_hidd = null) {
                    var pro_id = $(item_id).val();
                    $.ajax({
                        method: 'post',
                        url: "{{ route('load_product_price') }}",
                        data_type: 'html',
                        data: {

                            _token: '{{ csrf_token() }}',
                            pro_id: pro_id
                        },
                        success: function(data) {
                            $(item_location).val(data.price);
                            $(item_location_hidd).val(data.price);
                        },
                    });
                }

                $('body').on('change', '#cat_id_edit_bill', function(e) {
                    get_item_by_cat_id('#cat_id_edit_bill', '#pro_edit_bill');
                }); // Cat ID To Bring Pro Data

                $('body').on('change', '#pro_edit_bill', function(e) {
                    get_price_item('#pro_edit_bill', '#price_edit_bill');
                }); // Cat ID To Bring Pro Data

                $('body').on('click', '.add_new_row_edit_bill', function(e) {
                    e.preventDefault();

                    var stock_name = $('#stock_invoice').children('option:selected').data('stock');
                    var cat_name = $('#cat_id_invoice').children("option:selected").data("cat");
                    var pro_name = $('#pro_invoice').children('option:selected').data('pro');
                    var unit_name = $('#unit_invoice').children('option:selected').data('unit');
                    var id = $('#id_edit_bill').val();
                    var serial = $('#serial_edit_bill').val();
                    var cat_id = $('#cat_id_edit_bill').val();
                    var pro = $('#pro_edit_bill').val();
                    var unit = $('#unit_edit_bill').val();
                    var qty = $('#qty_edit_bill').val();
                    var price = $('#price_edit_bill').val();
                    var price_hidden = $('#price_edit_bill').val();
                    var stock = $('#stock_edit_bill').val();
                    var subtotal = (qty * price_hidden);
                    // var add_item_to_invoice_form = $('#add_item_to_invoice').serialize();
                    // var token_search = $('#token_search').val();
                    var $row =
                        `<tr>    
                                <td>1</td>
                                <td>
                                    <label>${stock_name}</label>
                                    <input type="hidden" name="id_edit_bill" value="${id}" id="id_update" class="id_update"/>
                                    <input type="hidden" name="serial_edit_bill" value="${serial}" id="serial_update" class="serial_update"/>
                                    <input type="hidden" name="gogal_edit_bill" value="" class="total-price"/>
                                    <input type="hidden" name="stocks_edit_bill[]" value="${ stock }"/>
                                    <input type="hidden" name="cat_edit_bill[]" value="${ cat_id }"/>
                                    <input type="hidden" name="pro_edit_bill[]" value="${pro}"/>
                                    <input type="hidden" name="unit_edit_bill[]" id="product-price"value="${unit}"/>
                                    <input type="hidden" name="qty_edit_bill[]" id="product-price"value="${qty}"/>
                                    <input type="hidden" name="price_edit_bill[]" id="product-price"value="${price}"/>

                                </td>
                                <td>
                                    <label>${cat_name}</label>
                                </td>
                                <td>
                                    <label>${pro_name}</label>
                                </td>
                                <td>
                                    <label>${unit_name}</label>
                                    </td>
                                    <td>
                                        <label>${qty}</label>
                                </td>
                                <td>
                                    <label>${price}</label>
                                </td>
                                <td>
                                    <label name="" id="subtotall_invoice"/>${subtotal}</label>
                                    <input type="hidden" name="sub_total[]" id="subtotall_invoice_input" value="${subtotal}" />
                                
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm remove_row"data-id="${cat_id}">-</button>
                                </td>
                            </tr>`;

                    $('#tboody_invoice').append($row);

                    count += 1;
                    calc_total();


                }); // Added Row To Invoice



                // *********************** End Edit Bill *******************************




                // *********************** Salse Back Bill *******************************

                $('#Salse_Back').click(function(e) {
                    e.preventDefault();
                    
                    
                    $.ajax({
                        type: "POST",
                        url: "{{route('Salse_Back.salse_back_bill')}}",
                        data: "data",
                        dataType: "html",
                        success: function(response) {
                            $('#Salse_Back').modal({
                                show: true,
                                backdrop: 'static',
                            });
                        }
                    });
                });


                // *********************** End Salse Back Bill *******************************
            });
        </script>
    @endsection
