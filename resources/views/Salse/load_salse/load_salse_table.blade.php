<table class="table table-bordered table-stripped table-hover">
    <thead class="table table-primary">
        <th width="1%">#</th>
        <th width="10%">نوع الفاتــــــورة</th>
        <th>رقم الفاتورة</th>
        <th>تاريخ الفاتورة</th>
        <th width="8%">نوع السداد</th>
        <th>اسم صاحب الفاتورة</th>
        <th>قيمة الفاتورة</th>
        <th>المبلغ المسدد</th>
        <th>المبلغ المتبقي</th>
        <th width="20%">اكشن</th>
    </thead>
    <tbody>
        @foreach ($Salse as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->bill_type }}</td>
                <td>{{ $item->serial }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->pay_type }}</td>
                <td>{{ $item->customer_id }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ $item->what_paid }}</td>
                <td>{{ $item->what_not_yet_paid }}</td>
                <td>

                    {{-- <a href="{{ route('Salse.edit', $item->id) }}" ata-toggle="modal"
                        data-target="#modal-xl-show" class="btn btn-warning btn-sm"
                        title="تعديل في الفاتورة"> تعديل
                    </a> --}}
                    <a href="#" class="btn btn-warning btn-sm" id="edit_bill"
                        data-bill-id=" {{ $item->id }}" title="تعديل في الفاتورة"> تعديل
                    </a>
                    <a href="#"class="btn btn-success btn-sm" data-toggle="modal"
                        data-target="#modal-xl-showd" title="تفاصيل الفاتورة">A4 <i class="fa fa-print"></i>
                    </a>
                    <a href="#"class="btn btn-info btn-sm" data-toggle="modal"
                        data-target="#modal-xl-showd" title="تفاصيل الفاتورة">A6 <i class="fa fa-print"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>