<div class="row">
    <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-header ">
                <b>
                    <h5 class="text-center">تعديل فاتورة مبيعات</h5>
                </b>
            </div>
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <input type="hidden" name="_token" value="x8wS8Ymxan8ZrT0QaMNNo1jOHEbHAJrHoatwGqtJ">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>
                                    <i class="far fa-calendar-alt"></i>
                                    التـــاريخ
                                </h6>

                                <input type="date_edit_bill" name="date_edit_bill" value="{{ $bill_salse_info->date }}"
                                    class="form-control form-control-sm" id="date">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                بيانات العميل
                                <select class="form-control form-control-sm" style="width: 100%;" data-id="1"
                                    tabindex="-1" aria-hidden="true" name="customer_edit_bill" id="customer_edit_bill">
                                    @if (empty($bill_salse_info->customer_id))
                                        <option value="">بدون عميل</option>
                                    @else
                                        <option value="{{ $bill_salse_info->serial }}"></option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>رقم الفاتورة <i class="fa fa-barcode"></i></h6>
                                <input type="text" value="{{ $bill_salse_info->serial }}" name="serial_edit_bill"
                                    style="background:rgb(190, 202, 213);color:#fff;text-align:center"
                                    class="form-control form-control-sm" id="serial_edit_bill">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>نوع الفاتورة <i class="fa fa-barcode"></i></h6>
                                <select name="bill_type_edit_bill" id="bill_type_edit_bill" class="form-control form-control-sm">
                                    <option value="{{ $bill_salse_info->bill_type }}">   {{$bill_salse_info->bill_type}}</option>
                               
                                </select>
                            </div>
                        </div>

                    </div>
                    <hr style="border:1px solid #007bff">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>القسم</h6>
                                <select class="form-control form-control-sm" style="width: 100%;" data-id="1"
                                    tabindex="-1" aria-hidden="true" name="cat_id_edit_bill" id="cat_id_edit_bill">
                                 <option value=""></option>
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">

                                <h6 style="text-align: center">الصنف</h6>

                                <select class="form-control form-control-sm" style="width: 100%;" data-id="1"
                                    tabindex="-1" aria-hidden="true" name="pro_edit_bill" id="pro_edit_bill">
                                    <option value=""></option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <h6>الوحدة</h6>
                                <select class="form-control form-control-sm" style="width: 100%;" data-id="1"
                                    tabindex="-1" aria-hidden="true" name="unit_edit_bill" id="unit_edit_bill">
                                  <option value=""></option>
                                    @foreach ($Units as $item)
                                    <option value="{{$item->id}}">{{$item->unit_name}}</option>
                                    
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <h6>الكمية</h6>
                                <input type="number" name="qty_edit_bill" class="form-control form-control-sm"
                                    id="qty_edit_bill">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <h6>المخزن</h6>
                                <select class="form-control form-control-sm" style="width: 100%;" data-id="1"
                                    tabindex="-1" aria-hidden="true" name="stock_edit_bill" id="stock_edit_bill">
                                <option value=""></option>
                                    @foreach ($stocks as $item)
                                    <option value="{{$item->id}}">{{$item->stock_name}}</option>
                                    
                                    @endforeach

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>السعر</h6>
                                <input type="text" name="price_edit_bill" class="form-control form-control-sm"
                                    id="price_edit_bill">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <h6>الكمية المتاحه في المخزن</h6>
                                <input type="text" name="available_qty" class="form-control form-control-sm"
                                    disabled style="background:rgb(190, 202, 213)" id="available_qty">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="button" class="btn btn-success btn-sm add_new_row_edit_bill mt-4"
                                    value="إضافة الصنف للفاتورة" style="float: right;">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr style="border:1px solid #007bff">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-hover table-bordered table-stripped"
                        aria-describedby="example2_info">
                        <thead class="table table-bordered table-info">
                            <tr>
                                <th width="2%">ID</th>
                                <th width="13%">القسم</th>
                                <th width="13%">اسم الصنف</th>
                                <th width="7%">الكمية</th>
                                <th width="15%">السعر</th>
                                <th width="15%">الإجمالي</th>
                                <th width="5%">remove</th>
                            </tr>
                        </thead>
                        <tbody id="tboody">
                            @if (!empty($bill_salse_detailse))


                                @foreach ($bill_salse_detailse as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->subtotal }}</td>
                                        <td><button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                                {{ $item->id }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="alert alert-danger">لا توجد داتا</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <hr style="border:1px solid #007bff">


                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <h6>
                                    إجمالي الأصناف
                                </h6>
                                <input type="text" name="total_items_edit_bill" id="total_item_count_edit_bill"
                                    class="form-control form-control-sm" disabled min="0"
                                    value="{{ $bill_salse_info->total_item_count }}"
                                    style="color:#000;text-align:center">
                            </div>
                            <div class="form-group">
                                <h6>
                                    طريقة الدفع
                                </h6>
                                <select name="pay_type_edit_bill" id="pay_type_edit_bill" class="form-control form-control-sm">
                                    <option value="{{ $bill_salse_info->pay_type }}">اختر طريقة الدفع</option>
                                    <option value="1">بيع كاش</option>
                                    <option value="2">بيع أجل</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <h6>
                                    الإجمالي النهائي
                                </h6>
                                <input type="text" name="last_total" value="{{ $bill_salse_info->total }}"
                                    style="text-align: center;color:#000" id="total-invoice_edit_bill"
                                    class="form-control form-control-sm" disabled>
                                <input type="hidden" name="last_total" id="" class="total-invoice_edit_bill">
                            </div>
                            <div class="form-group">
                                <h6>
                                    المبلغ المسدد
                                </h6>
                                <input type="number" name="what_paid_edit_bill" id="what_paid_edit_bill"
                                    value="{{ $bill_salse_info->what_paid }}" style="text-align: center;color:#000"
                                    class="form-control form-control-sm">
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <h6>
                                    خزنة التحصيل
                                </h6>
                                <select name="treasures_id_edit_bill" id="treasures_id_edit_bill" class="form-control form-control-sm">
                                    <option value="{{ $bill_salse_info->treasures_id }}">اختر الخزنة</option>
                                    <option value="1">الخزنة الرئيسية</option>
                                    <option value="2">الخزنة الفرعيه</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h6>
                                    المبلغ المتبقي تحصيلة
                                </h6>
                                <input type="text" value="{{ $bill_salse_info->what_not_yet_paid }}"
                                    style="text-align: center;color:#000;" name="what_not_yet_paid_edit_bill"
                                    id="what_not_yet_paid_edit_bill" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h6>
                            ملاحظات على الفاتورة
                        </h6>
                        <input type="text" name="" id=""
                            style="background: rgb(46, 46, 10);color:#fff" class="form-control form-control-sm"
                            value="لا توجد ملاحظـــــــــات على الفاتــــــورة">
                    </div>
                </div>

             
             <div align="center">
                <button type="submit" class="btn btn-primary btn-sm">تحديث الفاتــــــورة</button>
            </div>
            </div>

        </div>
    </div>

</div>
